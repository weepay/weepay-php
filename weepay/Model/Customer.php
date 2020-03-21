<?php

namespace weepay\Model;

use weepay\BaseModel;
use weepay\JsonBuilder;

class Customer extends BaseModel
{
    private $customerId;
    private $customerName;
    private $customerSurname;
    private $gsmNumber;
    private $email;
    private $identityNumber;
    private $city;
    private $country;

    /**
     * Get the value of customerId
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set the value of customerId
     *
     * @return  self
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the value of customerName
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set the value of customerName
     *
     * @return  self
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get the value of customerSurname
     */
    public function getCustomerSurname()
    {
        return $this->customerSurname;
    }

    /**
     * Set the value of customerSurname
     *
     * @return  self
     */
    public function setCustomerSurname($customerSurname)
    {
        $this->customerSurname = $customerSurname;

        return $this;
    }

    /**
     * Get the value of gsmNumber
     */
    public function getGsmNumber()
    {
        return $this->gsmNumber;
    }

    /**
     * Set the value of gsmNumber
     *
     * @return  self
     */
    public function setGsmNumber($gsmNumber)
    {
        $this->gsmNumber = $gsmNumber;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of identityNumber
     */
    public function getIdentityNumber()
    {
        return $this->identityNumber;
    }

    /**
     * Set the value of identityNumber
     *
     * @return  self
     */
    public function setIdentityNumber($identityNumber)
    {
        $this->identityNumber = $identityNumber;

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

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("customerId", $this->getCustomerId())
            ->add("customerName", $this->getCustomerName())
            ->add("customerSurname", $this->getCustomerSurname())
            ->add("gsmNumber", $this->getGsmNumber())
            ->add("email", $this->getEmail())
            ->add("identityNumber", $this->getIdentityNumber())
            ->add("city", $this->getCity())
            ->add("country", $this->getCountry())
            ->getObject();
    }

}
