<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "ecommercedb";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$query = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
    echo "<h1>" . $product['name'] . "</h1>";
    echo "<p>" . $product['description'] . "</p>";
    echo "<p>Price: " . $product['price'] . "</p>";
} else {
    echo "<p>Product not found.</p>";
}

$conn->close();
?>
