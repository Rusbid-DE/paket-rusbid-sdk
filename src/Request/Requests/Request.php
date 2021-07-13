<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Request\BaseRequest;
use \Motokraft\PaketRusBid\Object\ItemsObject;

class Request
{
    protected $itemClass;
    protected $request;

    function __construct(string $apiKey, string $token)
    {
        $this->request = new BaseRequest;

        $this->request->set('api_key', $apiKey);
        $this->request->set('token', $token);
    }

    function getErrors()
    {
        return $this->request->getErrorMessages();
    }

    protected function requestItems(array $params = [])
    {
        $result = $this->request->send($params);

        $items = array_map(function ($data) {
            return $this->prepareItem($data);
        }, $result->get('data', []));

        $result->set('data', $items);

        $data = $result->getArray();
        return new ItemsObject($data);
    }

    protected function requestItem(array $params)
    {
        $result = $this->request->send($params);

        if(!$data = $result->get('data'))
        {
            return false;
        }

        return $this->prepareItem($data);
    }

    protected function prepareItem(\stdClass $data)
    {
        $reflection = new \ReflectionClass($this->itemClass);
        return $reflection->newInstanceArgs([$data]);
    }
}