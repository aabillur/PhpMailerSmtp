<?php
$servername = "";//name
$username = "";
$password = "";
$dbname = "";

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


$conn = new mysqli($servername, $username, $password,$dbname,3306);
// Check connection
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
} else {
	echo "Connected successfully";

}

?>
	
	
