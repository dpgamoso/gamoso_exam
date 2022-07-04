<?php


include("functions/db_connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DOST Exam</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body >
   
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#resNav">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="#" class="navbar-brand">EXAM CRUD SYSTEM</a>
  </div>
  <div class="collapse navbar-collapse" id="resNav">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Help</a></li>
     
    </ul>
  </div>
</nav>

<div class="login">
  <div class="heading">
    <br> 
    <br> <br> 
    <br>
    <br> 
    <br> <br> 
    <br>
    <center><h2>Welcome</h2> </center>
    <form action="functions/verify.php" method="POST">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Username" name="username" required>
          </div>
            <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
          <br>
        <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="login">Log In</button>
       </form>
 		</div>
 </div>


</body>
</html>