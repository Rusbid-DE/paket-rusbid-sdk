<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\PackageObject;

class Package extends Request
{
    protected $itemClass = PackageObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'package.items';
        return $this->requestItems($params);
    }

    function getItem(int $package_id)
    {
        $params = [
            'task' => 'package.item',
            'id' => (int) $package_id
        ];

        return $this->requestItem($params);
    }

    function addItem(array $params)
    {
        $params['task'] = 'package.add';
        $result = $this->request->send($params);

        if(!(bool) $result->get('success'))
        {
            return false;
        }

        return (int) $result->get('id');
    }

    function deleteItem(int $package_id)
    {
        $params = [
            'task' => 'package.delete',
            'id' => (int) $package_id
        ];

        $result = $this->request->send($params);
        return (bool) $result->get('success');
    }
}