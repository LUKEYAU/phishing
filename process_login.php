<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$username = $_POST['username'];
$password = $_POST['password'];

$servername = "localhost";
$dbusername = "root";
$dbpassword = ""; 
$dbname = "login_system";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("connect error: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "sc";
} else {
    echo "error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
