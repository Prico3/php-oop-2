<?php require_once __DIR__ . "/Product.php";

class Toy extends Product
{
    public $color;
    function __construct($name, float $price, Category $category, $color)
    {
        parent::__construct($name, $price, $category);
        $this->color = $color;
    }
}
