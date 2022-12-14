<?php

require_once __DIR__ . "/Category.php";

class Product
{
    public $name;
    public $price;
    public $category;

    function __construct($name, float $price, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getDetails()
    {
        return "name: $this->name";
    }
}
