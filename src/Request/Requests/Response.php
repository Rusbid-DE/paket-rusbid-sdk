<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\BaseObject;

class Response extends BaseObject
{
    function getSuccess()
    {
        return (bool) $this->get('success');
    }

    function getData()
    {
        return (array) $this->get('data');
    }
}