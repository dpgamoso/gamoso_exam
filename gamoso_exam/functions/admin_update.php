
<?php
	include("db_connection.php");
$id=$_GET['id'];


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$ln = $_POST['ln'];
$bday = $_POST['birthdate'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$department = $_POST['department'];
$sss = $_POST['sssnumber'];
$tin = $_POST['tinnumber'];
$ph = $_POST['phnumber'];
$userlevel =$_POST['userlevel'];
$status=$_POST['status'];
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "UPDATE table_account SET lastname='$ln',firstname='$fn', middlename='$mn', birthday='$bday', gender='$gender', address='$address', contact_number='$contact', email='$email', department='$department', sss_number='$sss', tin_number='$tin', ph_number='$ph', user_level='$userlevel',account_status='$status', username='$username',password='$password' WHERE account_number=$id";

	if ($conn->query($sql) === TRUE  ) {
			
			
		   	echo "<script>alert('Successfully Updated!'); window.location = 'adminpage.php';</script>";
		} 
		else {
		    echo "<script>alert('Error in Updating!'); window.location = 'adminpage.php';</script>";
		}

	
	}
?>