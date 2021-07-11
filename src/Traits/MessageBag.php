<?php namespace Motokraft\PaketRusBid\Traits;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

trait MessageBag
{
    protected $messages = [];

    function add(string $type, string $message)
    {
        if(!isset($this->messages[$type]))
        {
            $this->messages[$type] = [];
        }

        $this->messages[$type][] = $message;
    }

    function setError(string $message)
    {
        $this->add('error', $message);
    }

    function setMessages(array $messages)
    {
        $this->messages = array_merge_recursive(
            $this->messages, $messages
        );
    }

    function getMessages()
    {
        return $this->messages;
    }

    function getErrorMessages()
    {
        if(!$this->hasTypeMessages('error'))
        {
            return false;
        }

        return $this->messages['error'];
    }

    protected function hasTypeMessages(string $type)
    {
        return isset($this->messages[$type]);
    }
}