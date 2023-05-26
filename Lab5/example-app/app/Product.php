<?php

namespace App;

class Product
{
    protected $name;
    protected $img;
    protected $description;
    protected $price;

    public function __construct($name, $img, $description, $price)
    {
        $this->name = $name;
        $this->img = $img;
        $this->description = $description;
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
