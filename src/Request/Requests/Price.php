<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\PriceObject;

class Price extends Request
{
    function getDelivery(array $params)
    {
        $params['task'] = 'price.delivery';
        $result = $this->request->send($params);

        if(!(bool) $result->get('success'))
        {
            return false;
        }

        if(!$data = $result->get('data'))
        {
            return false;
        }

        return new PriceObject($data);
    }

    function getPackage(int $package_id)
    {
        $params['task'] = 'price.package';
        $params['id'] = (int) $package_id;

        $result = $this->request->send($params);

        if(!(bool) $result->get('success'))
        {
            return false;
        }

        if(!$data = $result->get('data'))
        {
            return false;
        }

        return new PriceObject($data);
    }
}