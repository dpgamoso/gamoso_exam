<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db_dost";

$conn = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);

if($conn->connect_error){
	die("Connection Failed:".$conn->connect_error);
}


?>