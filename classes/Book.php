<?php

class Book extends Product{

    public $pages;

    function __construct($name,$price,$pages)
    {
        parent::__construct($name,$price);
        $this->pages = $pages;
    }

    function get_info(){
        $basic_info = parent::get_info()."Pages: {$this->pages}<br>";
        return $basic_info;
    }

}

?>