<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\PodStatusObject;

class PodStatus extends Request
{
    protected $itemClass = PodStatusObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'podstatus.items';
        return $this->requestItems($params);
    }

    function getItem(int $status_id)
    {
        $params = [
            'task' => 'podstatus.item',
            'id' => (int) $status_id
        ];

        return $this->requestItem($params);
    }
}