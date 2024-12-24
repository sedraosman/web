<?php
session_start();
include 'action.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $product_id=$_POST['product_id'];
    $quantity=$_POST['quantity'];

$check = $conn->query("SELECT * FROM cart WHERE prodcut_id = $product_id");
if($check->num_rows>0){
    $conn->query("UPDATE cart SET quantity = quantity+$quantity WHERE product_id=$product_id");

}
else{
    $conn->query("INSERT INTO cart(product_id,quantity)VALUES ($product_id,$quantity)");
}
header("Location:cart.php");
exit();

}



?>