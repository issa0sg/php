<?php

abstract class Product{
    public $name;
    public $price;
    private $discount;
      
    function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
        echo "Object created<br>";
    }

    function get_info(){
        return "Name: {$this->name}<br>
        Price: {$this->price}<br>";
    }

}


?>