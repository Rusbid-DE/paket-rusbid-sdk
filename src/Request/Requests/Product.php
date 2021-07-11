<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\ProductObject;

class Product extends Request
{
    protected $itemClass = ProductObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'product.items';
        return $this->requestItems($params);
    }

    function getItem(int $product_id)
    {
        $params = [
            'task' => 'product.item',
            'id' => (int) $product_id
        ];

        return $this->requestItem($params);
    }
}