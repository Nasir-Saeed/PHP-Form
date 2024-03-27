<?php
$servername = 'yourservername';
$username   = 'yourusername';
$password = 'yourpassword';
$dbname = 'yourdatabasename';

$conn = new mysqli( $servername, $username, $password, $dbname);


if($conn->connect_error){
    die("Connection Error: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";


if($conn->query($sql) === TRUE){
    echo "Database Successfully Created";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();



?>