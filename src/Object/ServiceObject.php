<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

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
}