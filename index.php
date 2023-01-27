<?php

include_once('classes/product.php');
include_once('classes/Notebook.php');
include_once('classes/Book.php');

$lenovo = new Notebook("Lenovo",15000,100);
$marvel = new Book("Comics",100,1000);

echo "<br>";
echo $lenovo->get_info();
echo "<br>";
echo $marvel->get_info();


?>