<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "importexport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM order_table";
$result = $conn->query($sql);
$sql1 = "SELECT * FROM ship";
$result1 = $conn->query($sql1);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css">
    <title>Admin Dashboard</title>
</head>

<body>
<!-- <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div> -->
    <!-- <p style="padding-left:225px;padding-top:125px;">
        <a href="reset-password_admin.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout_admin.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p> -->

    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Dashboard</a>
        <input type="text" class="form-control form-control-primary w-100" placeholder="Search...">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="logout_admin.php">Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-light d-none d-md-block sidebar">
                <div class="left-sidebar">
                    <ul class="nav flex-column sidebar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                                Orders
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            
                            <a class="nav-link" href="#">
                                <svg class="bi bi-chevron-right" width="16" height="16" viewBox="0 0 20 20"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z"
                                        clip-rule="evenodd" /></svg>
                                Ships
                            </a>
                            <!-- </button> -->
                        </li>

                    </ul>
                </div>
            </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h3>Orders</h3>
                <hr>
                
                <div class="card mb-3">
                    <div class="card-header">
                      <i class="fa fa-table"></i> Order Details</div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                
                            <tr>
                              <th>Order Number</th>
                              <th>Username</th>
                              <th>Total Amount</th>
                              <th>Item Name</th>
                              <th>Destination</th>
                              <th>weight</th>
                              <th>Order Status</th>
                              <th>Ship Number</th>
                              <th>Source </th>
                              <th>Source Type</th>
                              <th>Destination Type</th>
                              <th>Username Dest</th>
                              <th>Order At</th>


                            </tr>

                            <?php 
                               while($rows=$result->fetch_assoc())
                               {
                            ?>
                               <tr>
                                 <td><?php echo $rows['order_no'];?></td>  
                                 <td><?php echo $rows['source_username'];?></td> 
                                 <td><?php echo $rows['total_amt'];?></td> 
                                 <td><?php echo $rows['item_name'];?></td> 
                                 <td><?php echo $rows['destination_country'];?></td> 
                                 <td><?php echo $rows['weight'];?></td>
                                 <td><?php echo $rows['order_status'];?></td>    
                                 <td><?php echo $rows['ship_no'];?></td>  
                                 <td><?php echo $rows['source_country'];?></td> 
                                 <td><?php echo $rows['source_i_e'];?></td> 
                                 <td><?php echo $rows['destination_i_e'];?></td>   
                                 <td><?php echo $rows['destination_username'];?></td> 
                                 <td><?php echo $rows['created_at'];?></td> 
   

                        


                               </tr>
                               <?php
                               }
                               ?>
                     
                                   
                               
                          
                          
                         

                        </table>
                      </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                  </div>
                </div>
                <!-- /.container-fluid-->
                <!-- /.content-wrapper-->
          
                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                  <i class="fa fa-angle-up"></i>
                </a>
                <!-- Logout Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <h3>Ships</h3>
                    <hr>
                    <!-- to be replaced -->
                    <div class="table-responsive">
                        <table class="table table-dark">
                        <tr>
                              <th>ship number</th>
                              <th>ship name</th>
                              <th>ship status</th>
                              <th>ship source</th>
                            </tr>

                            <?php 
                               while($rows=$result1->fetch_assoc())
                               {
                            ?>
                               <tr>
                                 <td><?php echo $rows['ship_no'];?></td>  
                                 <td><?php echo $rows['ship_name'];?></td> 
                                 <td><?php echo $rows['ship_status'];?></td> 
                                 <td><?php echo $rows['ship_source'];?></td> 
    

                               </tr>
                               <?php
                               }
                               ?>
                            
                        </table>
                    </div>
                

            </main>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        function scrollWin(x, y) {
          window.scrollBy(x, y);
        }
        </script>
    <script type="text/javascript" src="admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script></script>
</body>
</html>