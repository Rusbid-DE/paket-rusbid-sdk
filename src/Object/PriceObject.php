<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

class PriceObject extends BaseObject
{
    function getPrice()
    {
        return (double) $this->get('price');
    }

    function getPod()
    {
        return (double) $this->get('pod');
    }

    function getProduct()
    {
        return (double) $this->get('product');
    }

    function getService()
    {
        return (double) $this->get('service');
    }

    function getTotal()
    {
        return (double) $this->get('total');
    }
}