<?php 
include ('../config.php');
session_start();

// echo($uid);
 $username=$_SESSION["user_name"];
//  echo($username);
 $uid=$_SESSION["uid"];
//  echo($uid);

if(isset($_POST['submit2']))
{        
    $uid=$_SESSION['uid'];
	$room1=$_POST['room1'];
	$room2=$_POST['room2'];
	$room3=$_POST['room3'];
	$room4=$_POST['room4'];
	$room5=$_POST['room5'];
	$room6=$_POST['room6'];
    $sql1="UPDATE `fpgen` SET status=0";
    $resultt=mysqli_query($conn,$sql1);
    if($resultt)
    {
		 echo $sql="INSERT INTO `fpgen`( `uid`, `room1`, `room2`, `room3`, `room4`, `room5`, `room6`, `status`)  VALUES ('$uid','$room1','$room2','$room3','$room4','$room5','$room6',1)";
       $result=mysqli_query($conn,$sql);
        if($result)
        {
            

            //   echo '<script> alert("Registration completed ")';
            //   echo 'window.location.href= "builders.php";';
        //    echo '</script>';
           header("location:floorplangenerator.php ");
        }
        else{
           echo ' alert("failed")';
        }
		}
    }
		
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>eBusiness Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    #card{
      width="50%";
    }
  </style>
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
label {
        /* display: inline-block;
        width: 150px; */
        text-align: left;
      }
</style>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>e</span>Business</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="floorplan.php">FloorPlan</a></li>
          <li><a class="nav-link scrollto" href="changepass.php">Change Password</a></li>
          <li><a class="nav-link scrollto" href="floorplangen.php">Floor Plan Generator</a></li>
          <li class="dropdown"><a href="#"><span>Builders</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="builders.php">Available Builders</a></li>
                  <li><a href="status.php">Status OF Request</a></li>
                  
                </ul>
</li>
          <li><a class="nav-link scrollto" href="workers.php">Worker&nbsp;&nbsp;&nbsp;</a></li>
             
                
             <li style="color:white">
                <?php
                                                echo $_SESSION['user_name'];
                                                
                      ?>
           
</li>
<li>
<a href="../login/logout.php" >Logout</a>
</li>
         
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Dream Home</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Available Workers</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
     
    <br><br>
    <div class="card text-center" style="width:70%; margin-left:15%;">
      <div class="card-header">
        heading
      </div>
      <div class="card-body">
      <form action="" method="post" class="signup-form" >
                        <div class="row"><br><br>
                        <div class="col-md-12">
                        <div class="form-group d-flex align-items-center">
                        <label>Room 1</label>
                            <input type="text" class="form-control" name="room1" id="room1" placeholder="1st room " autocomplete="off"  min="10" maxlength="10" id="squarefeet" name="squarefeet" required onkeyup="return Validphone()"
                                pattern="[0-9]{3-5}" oninvalid="setCustomValidity('fill phoneno !!')"  oninput="setCustomValidity('')" maxlength="30"> 
                        </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group d-flex align-items-center">
                        <label>Room 2</label>
                        
                            <input type="text" class="form-control" name="room2" id="room2" placeholder="2ed room " autocomplete="off"  min="10" maxlength="10" id="squarefeet" name="squarefeet" required onkeyup="return Validphone()"
                                 pattern="[0-9]{3-5}" oninvalid="setCustomValidity('fill phoneno !!')"   oninput="setCustomValidity('')" maxlength="30"> 
                        </div>
                        </div>
                            <div class="col-md-12">
                            <div class="form-group d-flex align-items-center">
                            <label>Room 3</label>
                            <input type="text" class="form-control" name="room3" id="room3" placeholder="3ed room " autocomplete="off"  min="10" maxlength="10" id="squarefeet" name="squarefeet" required onkeyup="return Validphone()"
                                pattern="[0-9]{3-5}" oninvalid="setCustomValidity('fill phoneno !!')"  oninput="setCustomValidity('')"maxlength="30"> 
                        </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group d-flex align-items-center"> 
                            <label>Room 4</label>
                            <input type="text" class="form-control" name="room4" id="romm4" placeholder="4th room " autocomplete="off"  min="10" maxlength="10" id="squarefeet" name="squarefeet" required onkeyup="return Validphone()"
                                pattern="[0-9]{3-5}" oninvalid="setCustomValidity('fill phoneno !!')"   oninput="setCustomValidity('')"  maxlength="30"> 
                        </div>
                        </div> <br>
                            <div class="col-md-12">
                            <div class="form-group d-flex align-items-center">
                            <label>Room 5</label>
                            <input type="text" class="form-control" name="room5" id="romm5" placeholder="5th  room " autocomplete="off"  min="10" maxlength="10" id="squarefeet" name="squarefeet" required onkeyup="return Validphone()"
                                pattern="[0-9]{3-5}" oninvalid="setCustomValidity('fill phoneno !!')"   oninput="setCustomValidity('')"  maxlength="30"> 
                        </div>
                            </div> 
                            <div class="col-md-12">
                            <div class="form-group d-flex align-items-center">
                            <label>Room 6</label>
                            <input type="text" class="form-control" name="room6" id="room6" placeholder="6th roomt" autocomplete="off"  min="10" maxlength="10" id="squarefeet" name="squarefeet" required onkeyup="return Validphone()"
                                pattern="[0-9]{3-5}" oninvalid="setCustomValidity('fill phoneno !!')"  oninput="setCustomValidity('')" maxlength="30"> 
                        </div>
                            </div> 
                           
                          
                              <input type="hidden" value="<?php echo $row['fid']; ?>" name="idc"/>
                              <input type="hidden" value="<?php echo $_SESSION['fid']=$row['fid']; ?>" name="ex"/>

                                <input type="submit" class="btn btn-secondary submit p-3" value="Generate Floorplan" id="btn" name="submit2"/>
                    </form>
      <div class="card-footer text-muted">
      </div>
    </div>

    <!-- ======= Blog Page ======= -->
    
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>