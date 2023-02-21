<?php
include ('../config.php');
session_start();
// $user=$_SESSION['user_name'];
$sql="select * from registration where username='".$_SESSION['user_name']."'";
$rs= mysqli_query($conn,$sql);

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
<style>
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
textarea, select
 {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select
 {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit]
 {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover
 {
  background-color: #45a049;
}
</style>
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

                      ?><a href="../login/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a  href="profile.php"><i class="fa fa-user fa-3x"></i> Profile</a>
                    </li>
                    <li>
                        <a  href="pdfg.php"><i class="fa fa-bar-chart-o fa-3x"></i>floor plan</a>
                    </li>
                    <li>
                        <a  href="changepasssw.php"><i class="fa fa-qrcode fa-3x"></i> change password</a>
                    </li>
                    <li  >
                        <a  class="active-menu" href="workers.php"><i class="fa fa-bar-chart-o fa-3x"></i> Workers </a>
                    </li>
                  
						   <li  >
                        <a   href="builders.php"><i class="fa fa-user fa-3x"></i>Builders</a>\ <ul class="nav nav-second-level">
                        <li>
                                <a href="builders.php">Builders</a>
                            </li>
                             <li>
                                <a href="pending.php">Status</a>
                            </li>
                            
                       
                        </ul>
                      </li>  	
					
			
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PROFILE </h2>   
                        <h5>Welcome user, Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">




        <?php
        //  $wid=$_SESSION['wid'];
                         
                                       if(isset($_SESSION['status']))
                                       {
                                           ?>
                                          <div class="alert alert-success" role="alert">
        
       
                                 <?php echo $_SESSION['status'] ; ?>
                                 
                                    </div>
                                           <?php
                                           
                                           unset($_SESSION['status']);
                                       }
          
                                       ?>
  	    <div class="well1 white">
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern"  action="workeraction.php" method="POST">
          <fieldset>
            <?php
        $query="SELECT wname,workertype from worker";
        $result = mysqli_query($conn, $query);
        ?>
        <form action="" method="POST" class="list">
        <div class="form-group"><br>
              <label class="control-label">Worker</label> 
                <select class="form-control" id="contractor" name="contractor">
                    <option>-- select --</option>
                        <?php
                            while ($row = mysqli_fetch_assoc($result))
                        {
                        ?>
                        
                    <option value="<?php echo $row['wname'];?>"><?php echo $row['wname'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Worktype : <?php echo $row['workertype'];?></option>
                    
                    <?php
                        
                        }
                ?>
        </select>
        </div>
  

            <div class="form-group"><br>
              <label class="control-label">To Date</label> 
              <input type="date" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="demo" name="todate" required="">
            </div>
            <div class="form-group">
              <label class="control-label">From Date</label>
              <input type="date" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" id="demo1" name="fromdate" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Work Type</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" name="work" required="">
            </div>
         
            <div class="form-group">
              <button type="submit" name="btnsubmit" class="btn btn-primary">Submit
              <!-- <input type="hidden" name ="idcp" value="<?php $row['wname'];?>"/> -->
              </button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script>
  var date=new Date();
  var tdate=date.getDate();
  var month=date.getMonth() + 1;
  if(tdate < 10)
{
  tdate='0'+tdate;
} 
 if(month < 10)
{
  month='0' +month;
}
var year=date.getUTCFullYear();
var minDate=year+"-"+month+"-"+tdate;
document.getElementById("demo").setAttribute('min',minDate);
document.getElementById("demo1").setAttribute('min',minDate);  
</script>
<script src="js/custom.js"></script>
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
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
