<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $weight;

    function __construct($name, float $price, Category $category, $weight)
    {
        parent::__construct($name, $price, $category);
        $this->weight = $weight;
    }
}
