<?php
require_once 'Category.php';
require_once 'Weight.php';

class Product
{
    use Weight;
    public string $name;
    public float $price;
    public int $quantity;
    public $category;

    public string $img;



    public function __construct(string $_name, float $_price, int $_quantity, Category $_category, string $_img)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->quantity = $_quantity;
        $this->category = $_category;
        $this->img = $_img;
    }

}


?>