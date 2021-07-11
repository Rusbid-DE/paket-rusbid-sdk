<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

class PackageObject extends BaseObject
{
    function getId()
    {
        return (int) $this->get('id');
    }

    function getWeight()
    {
        return (double) $this->get('weight');
    }

    function getAWeight()
    {
        return (double) $this->get('aweight');
    }

    function getTrack()
    {
        return (string) $this->get('track');
    }

    function getCreated(\DateTimeZone $tz = null)
    {
        if(!$created = $this->get('created'))
        {
            return false;
        }

        return new \DateTime($created, $tz);
    }

    function getStatus()
    {
        if(!$status = $this->get('status'))
        {
            return false;
        }

        return new StatusObject($status);
    }

    function getMethod()
    {
        if(!$method = $this->get('method'))
        {
            return false;
        }

        return new MethodObject($method);
    }

    function getRecipient()
    {
        if(!$recipient = $this->get('recipient'))
        {
            return false;
        }

        return new RecipientObject($recipient);
    }

    function getProducts()
    {
        if(!$products = $this->get('products'))
        {
            return false;
        }

        return array_map(function ($product) {
            return new Package\ProductObject($product);
        }, $products);
    }

    function getServices()
    {
        if(!$services = $this->get('services'))
        {
            return false;
        }

        return array_map(function ($service) {
            return new Package\ServiceObject($service);
        }, $services);
    }

    function isEnabledPod()
    {
        return (bool) $this->get('enabled_pod');
    }

    function isPaidPod()
    {
        return (bool) $this->get('paid_pod');
    }

    function getPrice()
    {
        if(!$prices = $this->get('prices'))
        {
            return false;
        }

        return new PriceObject($prices);
    }
}