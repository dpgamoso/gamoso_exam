<?php
  include("db_connection.php");



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

 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
        $sql = "INSERT INTO table_account  VALUES ('','$username','$password','$ln','$fn','$mn','$bday','$gender','$address','$contact','$email','$department','$sss','$tin','$ph','$userlevel','$status' )";
        
        if ($conn->query($sql) === TRUE  ) {
      
        

        echo "<script>alert('Account Successfully added!'); window.location = 'adduser.php';</script>";
       
    } 
    else {
        echo "<script>alert('Error in adding!'); window.location = 'adduser.php';</script>";
    }
      }

  }
 

$conn->close();




 



?>

