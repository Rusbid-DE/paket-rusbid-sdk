<?php namespace Motokraft\PaketRusBid;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Request\Requests;

class PaketRusBid
{
    protected $apiKey;
    protected $token;

    function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $oauth = new OAuth\OAuth($this->apiKey);
        $this->token = $oauth->getAccessToken();
    }

    function getRecipient()
    {
        return $this->getClass('Recipient');
    }

    function getMethod()
    {
        return $this->getClass('Method');
    }

    function getCountry()
    {
        return $this->getClass('Country');
    }

    function getProduct()
    {
        return $this->getClass('Product');
    }

    function getService()
    {
        return $this->getClass('Service');
    }

    function getPackage()
    {
        return $this->getClass('Package');
    }

    function getStatus()
    {
        return $this->getClass('Status');
    }

    function getPrice()
    {
        return $this->getClass('Price');
    }

    protected function getClass(string $name)
    {
        $class = Requests::class . '\\' . ucfirst($name);
        return new $class($this->apiKey, $this->token);
    }
}