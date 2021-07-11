<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\ServiceObject;

class Service extends Request
{
    protected $itemClass = ServiceObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'service.items';
        return $this->requestItems($params);
    }

    function getItem(int $service_id)
    {
        $params = [
            'task' => 'service.item',
            'id' => (int) $service_id
        ];

        return $this->requestItem($params);
    }
}