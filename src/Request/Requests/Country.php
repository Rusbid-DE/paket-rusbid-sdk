<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\CountryObject;

class Country extends Request
{
    protected $itemClass = CountryObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'country.items';
        return $this->requestItems($params);
    }

    function getItem(int $country_id)
    {
        $params = [
            'task' => 'country.item',
            'id' => (int) $country_id
        ];

        return $this->requestItem($params);
    }
}