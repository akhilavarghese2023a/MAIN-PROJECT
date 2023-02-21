<?php
     session_start();
     include("../config.php");

     if(isset($_SESSION['c_name']))
     {
                                      // echo 'inside';                          
                            // echo '<a href="profile.php">'      
                                          // echo '<h2> welcome'.$_SESSION['username'].'</h2>';
                                  }
    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> index</title>
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
                <a class="navbar-brand" href="index.html">DREAM HOME </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <?php
                                                echo $_SESSION['c_name'];

                      ?> <a href="../login/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a    href="#"><i class="fa fa-user fa-3x"></i>Leave Update</a>\ <ul class="nav nav-second-level">
                        <li>
                                <a  href="viewleave.php">Approve Leave</a>
                            </li>
                             <li>
                                <a href="lapproval.php">Pending</a>
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
                                <a class="active-menu"  href="assignwc.php">assign workers</a>
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
                     <h2>Contractor Dashboard</h2>   
                        <h5>Welcome  Contractor, Love to see you back. </h5>
                    </div>
                    <p style="color:white ;">Welcome</p>
                </li>
              
              
              </ul>
              <?php
                $cid=$_SESSION['cid'];

               $query = "select * FROM worker where cid='$cid' ";
               $result = mysqli_query($conn, $query);
               ?>
              <form action="" method="POST" class="list">
        <div class="form-row"><label>select the worker type</label><br>
            <div class="form-group col-md-15">
                <select class="form-control" id="officer" name="officer">
                    <option>-- select --</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <option value="<?php echo $row['workertype']; ?>"><?php echo $row['workertype']; ?></option>
                        <?php
                        
                            }
                        ?>
                </select>
            </div><br>

              <!-- <div class="col-md-12">
													<div class="form-group d-flex align-items-center">
												  		<label class="label" for="name">Worker Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
											  			<select name="workertype" class="form-control" id="workertype" required>
														  <option value="" disabled selected>Select workers type</option>
															<option value="Plumber">Plumber</option>
															<option value="Electtrician">Electrician</option>
															<option value="Painter">Painter</option>
															<option value="Decorator">Decorator</option>
															<option value="Labourer"> Labourer</option>

											  			</select>
										 			 </div> -->
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
