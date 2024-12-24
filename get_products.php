<?php

include 'action.php';


$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}


header('Content-Type: application/json');

$sql = "SELECT id, name, price, image_url FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $products = [];
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    echo json_encode($products);
} else {
    echo json_encode([]);
}
?>