<?php

namespace weepay\Model;

use weepay\BaseModel;
use weepay\JsonBuilder;

class Address extends BaseModel
{
    private $contactName;
    private $address;
    private $city;
    private $country;
    private $district;
    private $zipCode;

    /**
     * Get the value of contactName
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set the value of contactName
     *
     * @return  self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of zipCode
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set the value of zipCode
     *
     * @return  self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get the value of district
     */
    public function getDistrict()
    {
        return $this->district;
    }
    /**
     * Set the value of district
     *
     * @return  self
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }
    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("contactName", $this->getContactName())
            ->add("address", $this->getAddress())
            ->add("city", $this->getCity())
            ->add("country", $this->getCountry())
            ->add("district", $this->getDistrict())
            ->add("zipCode", $this->getZipCode())
            ->getObject();
    }

}
