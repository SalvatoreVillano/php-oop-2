<?php
require_once 'Product.php';
class Kennel extends Product
{
    public string $color;


    public function __construct(string $_name, float $_price, int $_quantity, Category $_category, string $_img, string $_color)
    {
        parent::__construct($_name, $_price, $_quantity, $_category, $_img);
        $this->color = $_color;

    }
}