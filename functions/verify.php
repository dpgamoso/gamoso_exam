<?php
include("db_connection.php");
session_start();

$userid=$_SESSION['id'];



	if(isset($_POST["login"])){

		$_SESSION["status"]=false;
	$username = $_POST['username'];
	$password= $_POST['password'];


	$sql = "SELECT * FROM table_account where username='$username' and password='$password'";
	$result = mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	$userid = $row['account_number'];

	if(mysqli_num_rows($result) >=1){

			
		

		if($row['user_level']=='admin' and $row['account_status']=='activated'){
		
			$_SESSION["status"]=true;
	  echo "<script>alert('Account Successfully login!'); window.location = 'adminpage.php';</script>";

		}elseif($row['user_level']=='admin' and $row['account_status']=='deactivated'){
			
			 echo "<script>alert('Error Account is deactivated!'); window.location = '../index.php';</script>";
		

		}elseif($row['user_level']=='user'and $row['account_status']=='activated'){
				$_SESSION["status"]=true;
			 echo "<script>alert('Account Successfully login!'); window.location = 'edituser2.php?id=$userid';</script>";
			
		}elseif($row['user_level']=='user'and $row['account_status']=='deactivated'){
				$id=$_row['account_number'];
			 echo "<script>alert('Error Account is deactivated!'); window.location = '../index.php';</script>";
			
		}else{
			 echo "<script>alert('Username or password is incorrect!'); window.location = '../index.php';</script>";
		}

}else{
			 echo "<script>alert('Username or password is incorrect!'); window.location = '../index.php';</script>";
		}

}




?>


 