<?php 
session_start();


$product_name =  $_POST['product_name'] . "<br>";
$product_price =  $_POST['product_price'] . "<br>";
$product_image =  $_POST['product_image'] . "<br>" ;



$_SESSION['product_name'] = $product_name;
$_SESSION['product_price'] = $product_price;
$_SESSION['product_image'] = $product_image;

// echo "Product Name: ". $product_name;
// echo "<br>";
?>