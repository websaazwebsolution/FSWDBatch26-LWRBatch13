<h1> Cart List</h1>
<?php 
session_start();

echo $_SESSION['product_name'];
echo $_SESSION['product_price'];
echo `<img src="/` . $_SESSION['product_image'] . `">`;

?>