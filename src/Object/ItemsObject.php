<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

class ItemsObject extends BaseObject
{
    function getData()
    {
        return (array) $this->get('data');
    }

    function getRecordsFiltered()
    {
        return (int) $this->get('recordsFiltered');
    }

    function getRecordsTotal()
    {
        return (int) $this->get('recordsTotal');
    }

    function getSuccess()
    {
        return (int) $this->get('success');
    }
}