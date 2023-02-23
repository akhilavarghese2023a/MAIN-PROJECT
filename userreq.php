<?php
include ('../config.php');
session_start();
// $user=$_SESSION['user_name'];
$sql="select wname from worker WHERE wusername='".$_SESSION['w_name']."'";
// echo $sql;
$rs= mysqli_query($conn,$sql);
$rss=mysqli_fetch_assoc($rs);
$s=$rss['wname'];

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
                                                echo $_SESSION['w_name'];

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
                        <a   href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="profile.php"><i class="fa fa-desktop fa-3x"></i>Profile</a>
                    </li>
                    <li>
                        <a  href="changepasssw.php"><i class="fa fa-qrcode fa-3x"></i> change password</a>
                    </li>
                    </li>
                    <li  >
                        <a  href="leave.php"><i class="fa fa-edit fa-3x"></i>Apply Leave </a>
                    </li>				
                    </li>
                    <li  >
                        <a class="active-menu" href="userreq.php"><i class="fa fa-edit fa-3x"></i>User Request</a>
                    </li>	
                        	
					
			
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>USER REQUEST </h2>   
                        <h5>Welcome Worker, Love to see you back. </h5>
                       
                    </div>
                </div>
                <section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
       
 <div class="panel panel-default">
    <div class="panel-heading">
     USER REQUEST APPROVAL
    </div>
    
    <div>
    
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
        
          <tr>
            <th data-breakpoints="xs">Request from User</th>
            <th><Start-End>Start to End Date</Start-End> </th>
            <th>Work type</th>
            <th>Amount</th>
            <th>Approve</th>
            <th>Reject</th>
            
          
            
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
                                            <?php 
                                            $wname=$_SESSION['w_name'];
                                            
                                            $query="SELECT * From tbl_uw WHERE status = 'pending'and wname='$s' ";
                                            $result=mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_array($result))
                                            {
                                    
                                            ?>
                                    
                                                <tr>
                                                    
                                                    <td><?php echo $row['username'];?></td>
                                                    <td><?php echo $row['todate'];?>----
                                                    <?php echo $row['fromdate'];?></td>
                                                    <td><?php echo $row['work'];?></td>
                                                    <td><?php echo $row['amount'];?></td>




                                                
                                                    
                                                <td  width="25%">
                                                <form action ="" method="POST">
                                                    <input type="hidden" name ="id" value="<?php echo $row['wname'];?>"/>
                                                    <input type="hidden" name ="idc" value="<?php echo $row['uw_id'];?>"/>
                                                    <input class="btn btn-primary" type="submit" name ="approved" value="approved" />
                                                    
                                            </td>
                                            <td>
                                                    <input class="btn btn-danger" type="submit" name ="delete" value="Reject"/> 
                                                <td>
                                               
                                                <!-- <button type="button" value="download"> <a href ="../pdf.php" download>Download</button> -->
                                                </td>
                                                    <!-- <td>
                                                    <input type="submit" name ="delete" value="delete"/> -->
                                                </form>
                                            </td>
                                            

                                                </tr>
                                        
                                        <?php
                                        }
                                        ?>
                                         </table>
                                        </div>                                      
                                        <?php
                                            if(isset($_POST['approved']))
                                                {
                                                    
                                                    $id=$_POST['idc'];     
                                                    $select ="UPDATE tbl_uw SET status='approved' WHERE uw_id='$id'";
                                                    $result=mysqli_query($conn,$select);
                                                    echo '<script type="text/javascript">';
                                                    echo 'window.location.href= "userreq.php";';
                                                    echo ' alert("Approved");';                                          
                                                    echo '</script>';
                                                    //return true;
                                                    
                                                }
                                            if(isset($_POST['delete']))
                                            {
                                                 
                                                $id=$_POST['idc'];     
                                                $select ="UPDATE tbl_uw SET status='delete' WHERE uw_id='$id'";
                                                $result=mysqli_query($conn,$select);
                                                echo '<script type="text/javascript">';
                                                echo 'window.location.href= "userreq.php";';
                                                echo ' alert("Delete Request");';                                          
                                                echo '</script>';
                                                //return true;
                                                
                                            }
                                           
                                        ?>
                                   
                                </table>
                            </div>
                        </div>
                    </div>
              </div>

                 <!-- / ROW  -->           
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
