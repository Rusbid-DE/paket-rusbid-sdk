<?php namespace Motokraft\PaketRusBid\Request;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\BaseObject;
use \Motokraft\PaketRusBid\Traits\MessageBag;
use \GuzzleHttp\Exception\RequestException;

class BaseRequest extends BaseObject
{
    use MessageBag;

    protected $client;

    function send(array $data = [])
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => 'https://api-paket.rusbid.de'
        ]);

        if($api_key = $this->get('api_key'))
        {
            $data['api_key'] = $api_key;
        }

        if($token = $this->get('token'))
        {
            $data['token'] = $token;
        }

        $response = $this->client->post('', [
            'form_params' => $data
        ]);

        if($response->getStatusCode() !== 200)
        {
            throw new \Exception('Error Request');
        }

        if(!$body = (string) $response->getBody())
        {
            throw new \Exception('Response empty!');
        }

        $data = (array) json_decode($body);

        if(json_last_error() !== JSON_ERROR_NONE)
        {
            throw new \Exception(json_last_error_msg());
        }

        $response = new BaseObject($data);

        if($messages = $response->get('messages'))
        {
            $this->setMessages((array) $messages);
        }

        return $response;
    }
}