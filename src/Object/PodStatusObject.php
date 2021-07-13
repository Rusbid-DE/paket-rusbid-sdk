<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

class PodStatusObject extends BaseObject
{
    function getId()
    {
        return (int) $this->get('id');
    }

    function getTitle()
    {
        return $this->get('title');
    }
}