
<?php
	include("db_connection.php");
$id=$_GET['id'];


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	



$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$sss = $_POST['sssnumber'];
$tin = $_POST['tinnumber'];
$ph = $_POST['phnumber'];

$username=$_POST['username'];
$password=$_POST['password'];


$sql = "UPDATE table_account SET   address='$address', contact_number='$contact', email='$email',  sss_number='$sss', tin_number='$tin', ph_number='$ph',  username='$username',password='$password' WHERE account_number=$id";

	if ($conn->query($sql) === TRUE  ) {
			
			
		   	echo "<script>alert('Successfully Updated!'); window.location = 'edituser2.php?id=$id';</script>";
		} 
		else {
		    echo "<script>alert('Error in Updating!'); window.location = 'adminpage.php';</script>";
		}

	
	}
?>