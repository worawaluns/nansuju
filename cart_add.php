<?php 
session_start();

if (isset($_POST['product_fur'])) {

 	$id_product = $_POST['product_fur'];
 	$_SESSION['cart'][] = array(
    'p_id'=> $_POST['product_fur'],
    );

    $_SESSION['number_product'] = count($_SESSION['cart']);
  
  header('location:product.php');
}

 ?>