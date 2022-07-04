<?php 
include("db_connection.php");
session_start(); 
$user_check=$_SESSION['username'];
$password_check = $_SESSION['password'];

$sql = "SELECT * FROM table_account WHERE username='$user_check' and password='$password_check'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($query);
$login_session = $row['account_number'];

if (!isset($login_session)) {
     mysqli_close($mysqli); 
     header("Location: /index.php"); 
}
?>