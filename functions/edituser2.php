<?php
session_start();
if($_SESSION["status"] !=true ){
    header("Location: http://localhost/gamoso_exam/index.php");
}
include("db_connection.php");
session_start();
$id=$_GET['id'];


 $sql="SELECT * FROM table_account where account_number='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
        while($row=mysqli_fetch_array($result)){
          

                    $fn = $row['firstname'];
                    $mn = $row['middlename'];
                    $ln = $row['lastname'];
                    $bday = $row['birthday'];
                    $gender = $row['gender'];
                    $address = $row['address'];
                    $contact = $row['contact_number'];
                    $email = $row['email'];
                    $department = $row['department'];
                    $sss = $row['sss_number'];
                    $tin = $row['tin_number'];
                    $ph = $row['ph_number'];
                    $userlevel =$row['user_level'];
                    $status=$row['account_status'];
                    $username=$row['username'];
                    $password=$row['password'];
                                                 
    }
 }


?>



<!DOCTYPE html>
<html lang="en">
    <head>
         <meta http-equiv="refresh" content="1800; url=http://localhost/gamoso_exam/index.php">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Information</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Information</a>
            <!-- Sidebar Toggle-->
          
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">           
                
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        
                         <li><a  onclick="logout()">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            
                           
                              <nav class="sb-sidenav-menu-nested nav">
                                   
                               
                                    

                                </nav>
                                                   
                          
                           
                        </div>
                    </div>
                   
                </nav>
            </div>
            </form>
            <div id="layoutSidenav_content">
                 
               <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Account</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="user_update.php?id=<?php echo $id; ?>">
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text"  name="fn" value="<?php echo $fn; ?>"disabled required />
                                                         <label for="inputLastName">Firstname</label>
                                                       
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" disabled type="text" name="mn"value="<?php echo $mn; ?>"  required/>
                                                         <label for="inputLastName">middlename</label>
                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" disabled type="text" name="ln" value="<?php echo $ln; ?>" required />
                                                         <label for="inputLastName">Lastname</label>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" disabled name="birthdate" value="<?php echo $bday; ?>" disabled required/>
                                                 <label for="inputLastName">Birthday</label>
                                              
                                            </div>
                                            <label for="inputLastName">Gender</label>
                                      <div class="form-floating mb-3">

                                    <select name="gender" class="form-control" disabled required >
                                         <option  ><?php echo $gender; ?></option>
                                        <option>---Select Gender---</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                   
                                  </select>                                           
                                   </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" name="address" value="<?php echo $address; ?>" required />
                                                <label for="inputEmail"> Barangay, City, Province </label>
                                            </div>

                                             <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="number" 
                                                 name="contact" value="<?php echo $contact; ?>" />
                                               <label for="inputLastName">Contact No.</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="email"  value="<?php echo $email; ?>" required />
                                               <label for="inputLastName">Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="sssnumber"  value="<?php echo $sss; ?>"required />
                                                        <label for="inputLastName">SSS #</label>
                                                    </div>
                                                </div>
                                                 <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="tinnumber" value="<?php echo $tin; ?>" required/>
                                                        <label for="inputLastName">Tin #</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="phnumber" value="<?php echo $ph; ?>" required/>
                                                        <label for="inputLastName">Philhealth #</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" 
                                                        type="text" placeholder="Create a password" name="username" required  value="<?php echo $username; ?>" />
                                                        <label for="inputPassword">Username</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="password" required value="<?php echo $password; ?>"/>
                                                        <label for="inputPasswordConfirm">Password</label>
                                                    </div>
                                                </div>

                                                        

                                            </div>

                                            <div class="form-floating mb-3">
                                                        <select name="userlevel" class="form-control" disabled required >
                                                            <option><center><?php echo $userlevel; ?></center></option>
                                                             
                                                        <option>admin</option>
                                                        <option>user</option>
                                                       
                                                      </select>                                           
                                             </div>

                                             <div class="form-floating mb-3">
                                                        <select name="department" class="form-control" disabled >
                                                        <option><center><?php echo $department; ?></center></option>
                                                        <option>ITSM</option>
                                                        <option>RSTL</option>
                                                        <option>FAS</option>
                                                        <option>ORD</option>
                                                         <option>COA</option>
                                                      </select>                                           
                                             </div>

                                             <div class="form-floating mb-3">
                                                        <select name="status" class="form-control" disabled >
                                                        <option><center><?php echo $status; ?></center></option>
                                                        <option>activated</option>
                                                        <option>deactivated</option>
                                                      
                                                      </select>                                           
                                             </div>
                                              <div class="form-floating mb-3">
                                                <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary" value="Update"></a></div>



                                            </div>     
                                             <a class="btn btn-danger" href="adminpage.php"> Cancel</a>                                       
                                             </div>

                                             
                                         

                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>                    
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/script1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
       
       
        <script src="js/datatables-simple-demo.js"></script>
         <script type="text/javascript">

function logout(){
if(confirm("Are you sure you want to Logout?")==true)
{
window.location.assign("logout.php")
}else if (confirm == false){

}
}
</script>
        

    </body>
</html>

