<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\MethodObject;

class Method extends Request
{
    protected $itemClass = MethodObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'method.items';
        return $this->requestItems($params);
    }

    function getItem(int $method_id)
    {
        $params = [
            'task' => 'method.item',
            'id' => (int) $method_id
        ];

        return $this->requestItem($params);
    }
}