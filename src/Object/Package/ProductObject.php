<?php namespace Motokraft\PaketRusBid\Object\Package;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\BaseObject;

class ProductObject extends BaseObject
{
    function getId()
    {
        return (int) $this->get('id');
    }

    function getTitle()
    {
        return (string) $this->get('title');
    }

    function getAmount()
    {
        return (string) $this->get('amount');
    }

    function getPrice()
    {
        return (double) $this->get('price');
    }

    function getSumma()
    {
        return (double) $this->get('summa');
    }
}