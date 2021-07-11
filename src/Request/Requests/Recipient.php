<?php namespace Motokraft\PaketRusBid\Request\Requests;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

use \Motokraft\PaketRusBid\Object\RecipientObject;

class Recipient extends Request
{
    protected $itemClass = RecipientObject::class;

    function getItems(array $params = [])
    {
        $params['task'] = 'recipient.items';
        return $this->requestItems($params);
    }

    function getItem(int $recipient_id)
    {
        $params = [
            'task' => 'recipient.item',
            'id' => (int) $recipient_id
        ];

        return $this->requestItem($params);
    }

    function addItem(array $params)
    {
        $params['task'] = 'recipient.add';
        $result = $this->request->send($params);

        if(!(bool) $result->get('success'))
        {
            return false;
        }

        return (int) $result->get('id');
    }

    function updateItem(array $params)
    {
        $params['task'] = 'recipient.update';
        $result = $this->request->send($params);

        if(!(bool) $result->get('success'))
        {
            return false;
        }

        return (int) $result->get('id');
    }

    function deleteItem(int $recipient_id)
    {
        $params = [
            'task' => 'recipient.delete',
            'id' => (int) $recipient_id
        ];

        $result = $this->request->send($params);
        return (bool) $result->get('success');
    }
}