<?php

namespace weepay\Model;

use weepay\BaseModel;
use weepay\JsonBuilder;

class Product extends BaseModel
{
    private $name;
    private $productPrice;
    private $itemType;
    private $productId;

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of productPrice
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set the value of productPrice
     *
     * @return  self
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get the value of itemType
     */
    public function getItemType()
    {
        return $this->itemType;
    }

    /**
     * Set the value of itemType
     *
     * @return  self
     */
    public function setItemType($itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    /**
     * Get the value of productId
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("name", $this->getName())
            ->add("productPrice", $this->getProductPrice())
            ->add("itemType", $this->getItemType())
            ->add("productId", $this->getProductID())
            ->getObject();
    }

}
