<?php namespace Motokraft\PaketRusBid\OAuth;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Request\BaseRequest;

class OAuth extends BaseRequest
{
    protected $apiKey;

    function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    function getAccessToken()
    {
        $result = $this->send([
            'task' => 'oauth.authorize',
            'api_key' => $this->apiKey
        ]);

        if(!$code = $result->get('code'))
        {
            return false;
        }

        $result = $this->send([
            'task' => 'oauth.token',
            'api_key' => $this->apiKey,
            'code' => $code
        ]);

        if(!$result->get('success'))
        {
            return false;
        }

        return $result->get('token');
    }
}