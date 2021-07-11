<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\StatusObject;

class Status extends Request
{
    protected $itemClass = StatusObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'status.items';
        return $this->requestItems($params);
    }

    function getItem(int $status_id)
    {
        $params = [
            'task' => 'status.item',
            'id' => (int) $status_id
        ];

        return $this->requestItem($params);
    }
}