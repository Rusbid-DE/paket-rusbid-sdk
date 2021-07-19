<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

class ProductObject extends BaseObject
{
    function getId()
    {
        return (int) $this->get('id');
    }

    function getTitle()
    {
        return $this->get('title');
    }

    function getWeight()
    {
        return (double) $this->get('weight');
    }
    
    function getPrice()
    {
        return (double) $this->get('price');
    }

    function getSku()
    {
        return $this->get('sku');
    }

    function getComing()
    {
        return (int) $this->get('coming');
    }

    function getRemained()
    {
        return (int) $this->get('remained');
    }
}