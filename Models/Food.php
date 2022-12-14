<?php
require_once 'Product.php';
class Food extends Product
{
    public float $weight;
    public string $taste;

    public function __construct(string $_name, float $_price, int $_quantity, Category $_category, string $_img, float $_weight, string $_taste)
    {
        parent::__construct($_name, $_price, $_quantity, $_category, $_img);
        $this->weight = $_weight;
        $this->taste = $_taste;

    }
}