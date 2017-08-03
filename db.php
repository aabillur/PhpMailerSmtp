<?php
/* $servername = "letsservicedev.cx7jfrgsxh1i.us-west-2.rds.amazonaws.com:3306";
$username = "letsservicedev";
$password = "letsservice!123";
$dbname = "letsservicedev";

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


$conn = new mysqli($servername, $username, $password,$dbname,3306);
// Check connection
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
} else {
	echo "Connected successfully";
	
} */

$servername = "lsproduction.cx7jfrgsxh1i.us-west-2.rds.amazonaws.com";
$username = "arunProd";
$password = "letsservice@123";
$dbname = "lsproduction";

/*$servername = "letsservicedev.cx7jfrgsxh1i.us-west-2.rds.amazonaws.com";
$username = "arun";
$password = "letsservice@123";
$dbname = "letsservicedev";*/

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


$conn = new mysqli($servername, $username, $password,$dbname,3306);
// Check connection
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
} else {
	// /echo "Connected successfully";

}

?>
	
	
