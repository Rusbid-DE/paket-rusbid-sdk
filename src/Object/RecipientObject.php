<?php namespace Motokraft\PaketRusBid\Object;

/**
 * @name        Paket RusBid Germany
 * @package     motokraft/paket-rusbid-sdk
 *
 * @copyright   2021 motokraft. MIT License
 */

class RecipientObject extends BaseObject
{
    function getId()
    {
        return (int) $this->get('id');
    }

    function getSurName()
    {
        return $this->get('surname');
    }

    function getName()
    {
        return $this->get('name');
    }

    function getPatronymic()
    {
        return $this->get('patronymic');
    }

    function getStreet()
    {
        return $this->get('street');
    }

    function getDom()
    {
        return $this->get('dom');
    }

    function getApartment()
    {
        return $this->get('apartment');
    }

    function getIndex()
    {
        return $this->get('index');
    }

    function getCity()
    {
        return $this->get('city');
    }

    function getRegion()
    {
        return $this->get('region');
    }

    function getCountry()
    {
        if(!$country = $this->get('country'))
        {
            return false;
        }

        return new CountryObject((array) $country);
    }

    function getPhone()
    {
        return (int) $this->get('phone');
    }

    function getStrPhone()
    {
        return $this->get('strphone');
    }

    function getFio(string $separate = ' ')
    {
        $result = [];

        if($surname = $this->getSurName())
        {
            array_push($result, $surname);
        }

        if($name = $this->getName())
        {
            array_push($result, $name);
        }

        if($patronymic = $this->getPatronymic())
        {
            array_push($result, $patronymic);
        }

        $result = implode($separate, $result);
        return preg_replace('/[\s]{2,}/', ' ', $result);
    }
}