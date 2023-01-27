<?php

class Notebook extends Product{

    public $cpu;

    function __construct($name,$price,$cpu)
    {
        parent::__construct($name,$price);
        $this->cpu = $cpu;
    }

    function get_info(){
        $basic_info = parent::get_info()."CPU: {$this->cpu}<br>";
        return $basic_info;
    }
}

?>