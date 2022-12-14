<?php
require_once 'Product.php';
class Toys extends Product
{
    public string $material;


    public function __construct(string $_name, float $_price, int $_quantity, Category $_category, string $_img, string $_material)
    {
        parent::__construct($_name, $_price, $_quantity, $_category, $_img);
        $this->material = $_material;

    }
}