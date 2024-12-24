<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ecommercedb";


$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}

/*
$sql="CREATE TABLE orders(
id INT(11) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
adderss VARCHAR(255) NOT NULL,
city VARCHAR(100) NOT NULL,
phone VARCHAR(20) NOT NULL,
total_amount DECIMAL(10,2) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP


)";
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

*/