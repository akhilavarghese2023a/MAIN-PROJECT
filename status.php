<?php 
include ('../config.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style>
        #builder {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #builder td, #builder th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        /* #builder tr:nth-child(even){background-color: #f2f2f2;} */

        #builder tr:hover {background-color: #ddd;}

        #builder th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: grey;
        color: white;
        }
        /* th {
  background-color: #04AA6D;
  color: white;
} */
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">DREAM HOME</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <?php
session_start();
    echo $_SESSION['c_name'];
 ?> &nbsp; <a href="../login/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                  
                    <li>
                        <a  href="index.php"><i class="fa fa-home fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="profile.php"><i class="fa fa-user fa-3x"></i>Profile</a>
                    </li>
                    <li>
                        <a  href="changepasssw.php"><i class="fa fa-qrcode fa-3x"></i> change password</a>
                    </li>
                    </li>
					 <li >
                        <a  href="workers.php"><i class="fa fa-bar-chart-o fa-3x"></i>Add Workers</a>
                    </li>	
                    
                    <li  >
                        <a    href="#"><i class="fa fa-user fa-3x"></i>Leave Update</a> <ul class="nav nav-second-level">
                        <li>
                                <a  href="viewleave.php">Approve Leave</a>
                            </li>
                             <li>
                                <a   href="lapproval.php">approved</a>
                            </li>
                            <li>
                                <a href="lreject.php">reject</a>
                            </li>
                            <li  >
                            </ul>
                         </li>
                      <li  >
                        <a    href="#"><i class="fa fa-user fa-3x"></i>Updates</a>\ <ul class="nav nav-second-level">
                        <li>
                                <a  href="viewreq.php">View Request</a>
                            </li>
                             <li>
                                <a href="assignwc.php">assign workers</a>
                            </li>
                            <li>
                                <a class="active-menu" href="status.php">Approved /Rejected</a>
                            </li>
                            <li>
                                <a href="lreject.php">pending projects</a>
                            </li>
                       
                        
                      </li>  	
					
                      	
                      
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>APPROVED WORKERS</h2>   
                        <h5>Welcome Contractor , Love to see you back. </h5>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <table id ="approve"  class="content-table">
                                            <tr>
                                            <th>User Name</th>
                                                <th> Status</th>&nbsp;&nbsp;
                                               <th>Request to contractor</th>
                                               
                                            </tr>
                                            <?php 
                                           $cname=$_SESSION['c_name'];
                                           $query="SELECT * From bc_request WHERE `bcstatus` = 'approved'and cusername='$cname' ORDER BY `bcid` ASC";
                                          $result=mysqli_query($conn,$query);
                                          while($row = mysqli_fetch_array($result))
                                          {
                                          
                                          ?>
                                          
                                              <tr>
                                                  
                                                  <td><?php echo $row['bid'];?></td>
                                                  <td><?php echo $row['bcstatus'];?></td>
   
                                                  
                                             <?php
                                          }?>
                                        
                                   
                                </table>
                            </div>
                        </div>
                    </div>
              </div>
    </div>  
                 <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
