<?php


namespace App\Model;


class Product
{
    private $id;
    private $sku;
    private $name;
    private $price;
    private $discount;
    private $img;


    public function __construct($sku, $name, $price, $discount, $img)
    {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
        $this->img = $img;
    }


    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price): void
    {
        $this->price = $price;
    }


    public function getDiscount()
    {
        return $this->discount;
    }


    public function setDiscount($discount): void
    {
        $this->discount = $discount;
    }


    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img): void
    {
        $this->img = $img;
    }


}