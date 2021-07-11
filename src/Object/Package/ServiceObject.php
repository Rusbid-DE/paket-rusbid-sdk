<?php namespace Motokraft\PaketRusBid\Object\Package;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\BaseObject;

class ServiceObject extends BaseObject
{
    function getId()
    {
        return (int) $this->get('id');
    }

    function getTitleRu()
    {
        return $this->get('title_ru');
    }

    function getTitleDe()
    {
        return $this->get('title_de');
    }

    function getPrice()
    {
        return (double) $this->get('price');
    }

    function getDone()
    {
        return (int) $this->get('done');
    }
}