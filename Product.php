<?php 

class Product {
    public $name;
    public $price;
    public $brand;

    function __construct($_name, $_price, $_brand)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->brand = $_brand;
    }

    public function getSale($discount) {
        return $this->price - ($this->price * $discount / 100);
    }
}


?>