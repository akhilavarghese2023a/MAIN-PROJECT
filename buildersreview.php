<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "hb";
$conn=mysqli_connect($servername,$username,$password,$database);
     session_start();
     if(isset($_SESSION['user_name']))
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
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
                                                echo $_SESSION['user_name'];

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
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                     
                        <a  href="changepasssw.php"><i class="fa fa-qrcode fa-3x"></i> change password</a>
                    </li>
						
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Admin Appproval</a>
                    </li>
                    <li  >
                        <a class="active-menu"   href="buildersreview.php"><i class="fa fa-bar-chart-o fa-3x"></i> Builders Review</a>
                    </li>	
                    <li  >
                        <a   href="#"><i class="fa fa-user fa-3x"></i>Products</a> <ul class="nav nav-second-level">
                        <li>
                                <a href="addproduct.php">Add products</a>
                            </li>
                             <li>
                                <a href="editproduct.php">Edit Products</a>
                            </li>
                            <li>
                                <a href="viewproduct.php">View Products </a>
                            </li>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>View Builders</h2>   
                        <!-- <h5>Welcome  Admin, Love to see you back. </h5>
                    </div>
                    <p style="color:white ;">Welcome</p>
                    
                    <?php
                    echo '<center>welecome to admin page ';
                    echo '<center><h2 style="color:black ;"><b>'.$_SESSION['user_name'].'</b></h2>';

                        ?> -->

              </ul>
            </div><br><br>
            <div class="text-center">
                <label for="builders">Builders List</label>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th>Serial No:</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User name</th>

                        <th>comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // $username=$row['busername'];
                            $sq="SELECT * FROM `registration` WHERE usertype='builder'";
                            $resul=mysqli_query($conn,$sq);
                            $sno=1;
                            while($rows=mysqli_fetch_assoc($resul))
                            {                                
                            ?>
                        <tr>
                            <th scope="row"><?php echo $sno; ?></th>
                            <td><?php echo $rows['fname']; ?></td>
                            <td><?php echo $rows['lname']; ?></td>
                            <td><?php echo $rows['username']; ?></td>
                            <td><a href="view.php?username=<?php echo $rows['username']; ?>" class="btn btn-primary">view</a></td>
                            
                        </tr>
                        <?php
                               $sno+=1; }
                            ?>                        
                    </tbody>
                </table>
            </div>
        </div>
        
        </div>
        
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
