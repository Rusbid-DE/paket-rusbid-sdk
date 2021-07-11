<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

class BaseObject
{
    protected $data = [];

    function __construct($data = [])
    {
        if(is_object($data))
        {
            settype($data, 'array');
        }

        $this->loadArray($data);
    }

    function set(string $name, $value)
    {
        $this->data[$name] = $value;
    }

    function get(string $name, $default = null)
    {
        if(!$this->has($name))
        {
            return $default;
        }

        return $this->data[$name];
    }

    function remove(string $name)
    {
        if(!$this->has($name))
        {
            return false;
        }

        unset($this->data[$name]);
        return true;
    }

    function has(string $name)
    {
        return isset($this->data[$name]);
    }

    function loadArray(array $data)
    {
        foreach($data as $name => $value)
        {
            $this->set($name, $value);
        }
    }

    function clear()
    {
        $this->data = [];
    }

    function getArray()
    {
        return $this->data;
    }
}