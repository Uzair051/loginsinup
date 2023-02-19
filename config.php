<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "fns189";

$conn = mysqli_connect($server,$username,$password,$dbname);
if ($conn == false) {
    die("Failed to establish connection with the Database".mysqli_connect_error());
}else{
    return $conn;
}
?>