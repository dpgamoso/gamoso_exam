<?php
include("db_connection.php");
include('button.php');




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
        <title>Admin Page</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Admin Page</a>
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
                                    <a class="nav-link" href="adminpage.php">View Users</a>
                                    <a class="nav-link" href="adduser.php">Add Users</a>
                                   

                                </nav>
                                                   
                          
                           
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       
                       
                       
                      
                       
                            <div class="card-header">
                                <br>
                                <i class="fas fa-table me-1"></i>
                                List of Users
                                
                            </div>
                          <br>
                         
  

                <form action="search.php" method="POST" >
                      <input type="text" id="search" name="search" placeholder="Search here..."/>  

                      <input type="submit" class="btn btn-success" value="Search">
                         <br><br>
                             
                             
                </form>
               
                      <table class="table table-bordered" >
      <thead class="alert-info">
        <tr>
          
          <th>Fullname</th>
         
         <th>Birthday</th>  
         <th>Gender</th> 
         <th>Address</th>          
        <th>Department</th>
        <th>Userlevel#</th>
        <th>Username</th>
        <th>Account Status</th>
        

         <th>Action</th>
        </tr>
     
                     <tr >
                      <?php
                      $keyword=$_POST['search'];
    $query2 = mysqli_query($conn, "SELECT * FROM `table_account` WHERE   `firstname` LIKE '%$keyword%' OR  `lastname` LIKE '%$keyword%' OR `middlename` LIKE '%$keyword%'   or `email` LIKE '%$keyword%'   or `address` LIKE '%$keyword%' or `department` LIKE '%$keyword%' or `account_status` LIKE '%$keyword%' or `user_level` LIKE '%$keyword%' ") or die(mysqli_error());

                     
                      if (mysqli_num_rows($query2) > 0) {
                      while ($row = $query2->fetch_assoc()) {
                    ?>
                        <td style="background-color:#fff;" >
                        <?php echo $row['lastname'].", ".$row['firstname']." ".$row['middlename'];  ?>        
                        </td>
                     <td style="background-color:#fff;" ><?php echo $row['birthday']; ?></td>
                      <td style="background-color:#fff;" ><?php echo $row['gender']; ?></td>
                      <td style="background-color:#fff;" ><?php echo $row['address']; ?></td>
                   
                   
                    <td style="background-color:#fff;" ><?php echo $row['department']; ?></td>
                  <td style="background-color:#fff;" ><?php echo $row['user_level']; ?></td>
                    <td style="background-color:#fff;" ><?php echo $row['username']; ?></td>
                    <td style="background-color:#fff;" ><?php echo $row['account_status']; ?></td>
                   

                     <td style="background-color:#fff;" >

             
              <a  href="edituser.php?id=<?php echo $row['account_number']; ?>" class="btn btn-success"><span class="fas fa-fw fa-edit"></span> Edit</a>              
                
             
            </td>
                    </tr>
                  <?php
                    }
                  }else{
                  ?>
                   <tr>
                     <td colspan="7" style="font-size: 15px; font-weight: bold;">No data found!</td>
                   </tr>
                  <?php  
                  }
                  ?>
                 </tbody>
                </table>
                        
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/script1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
       
       
        <script src="js/datatables-simple-demo.js"></script>
        <script>
          $(document).ready(function(){
            $('#data').DataTable();
          });
        </script>
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
