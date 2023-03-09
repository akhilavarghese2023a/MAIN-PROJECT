<?php 
include ('../config.php');
session_start();
?>
!DOCTYPE html>
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
   @import url(https://fonts.googleapis.com/css?family=Gloria+Hallelujah);

html, body {
  font-family: 'Gloria Hallelujah', cursive;
  background: #f7f7f7;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

#msg {
  position: absolute;  
  left: 40px;
  top: 0;
  font-size: 1.5em;
}

#plan {
  margin: 25px 35%;
  width: 400px;
}

.room {
  position: relative;
  border: black 5px solid; 
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
}

.room:before {         /* window */
  content: "";
  position: absolute;
}

.room:after {           /* door */
  content: "";
  position: absolute;
}

.roomName {
  margin-left: 10px;
	margin-right: auto;
  font-weight: bold; 
  font-size: 1.2em;
  color: #1658f4;
}

.start {
  position: relative;
  top: 170px ;
  left: -20px;
	width: 0; 
	height: 0; 
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 10px solid #ad1A06;
}

/******************************************/
/*  BULB                                  */
/******************************************/
.simple-bulb {
  visibility: hidden;
  position: absolute;
  right: -10px;
  top: 2px;
  width: 50px;
}

.base {
  position: relative;
  top: 0;
  left: 0;
  height: 5px;
  width: 15px;
  border-radius: 90px 90px 0 0;
  -moz-border-radius: 90px 90px 0 0;
  -webkit-border-radius: 90px 90px 0 0;
  background: #424242;
}

.base:before {
  content: "";
  position: absolute;
  top: 5px;
  left: -5px;
  height: 5px;
  width: 25px;
  border-radius: 30px 30px 0 0;
  -moz-border-radius: 30px 30px 0 0;
  -webkit-border-radius: 30px 30px 0 0;
  border-bottom: 2px solid #aaa;
  background: #424242;
}

.base:after {
  content: "";
  position: absolute;
  top: 12px;
  left: -5px;
  height: 5px;
  width: 25px;
  border-bottom: 2px solid #aaa;
  background: #424242;
}

.light {
  position: relative;
  top: 14px;
  left: -5px;
  height: 5px;
  width: 25px;
  background: #f9f981;
}

.light:after {
  content: "";
  position: absolute;
  top: 4px;
  left: -7px;
  height: 30px;
  width: 40px;
  border-radius: 35px 35px 50px 50px;
  -moz-border-radius: 35px 35px 50px 50px;
  -webkit-border-radius: 35px 35px 50px 50px; 
  background: #f9f981;
}

.light:before {
  content: "";
  position: absolute;
  top: 20px;
  left: 0;
  height: 8px;
  width: 8px;
  border-radius: 90px 40px 90px 40px;
  -moz-border-radius: 90px 40px 90px 40px;
  -webkit-border-radius: 90px 40px 90px 40px; 
  background: #fcffc1;
  z-index: 1;
}

/******************************************/
/*  ROOMS                                 */
/******************************************/
div[class^="room"]:nth-child(2) {
  
  left: 0;
  top: 0;
  width: 180px;
  height: 77px;
  /* border-left-color: transparent;   */
  /* border-right-color: transparent;  */
}

/* Front door (first half)*/
div[class^="room"]:nth-child(2):before {  
  left: -2px;
  bottom: -60px;
  height: 53px;
  width: 25px;
  border-width: 3px 2px 2px 2px;
  border-style: double solid solid solid;
  border-color: black black black transparent;
  border-radius: 0 0 27px 0;
  -moz-border-radius: 0 0 27px 0;
  -webkit-border-radius: 0 0 27px 0;
}  

/* Front door (first half)*/
div[class^="room"]:nth-child(2):after {
  top: 170px;
  left: -2px;
  height: 53px;
  width: 25px;
  border-width: 2px 2px 3px 2px;
  border-style: solid solid double solid;
  border-color: black black black transparent;
  border-radius: 0 27px 0  0;
}

div[class^="room"]:nth-child(3) {
  left: 180px;
  top: -87px;
  width: 200px;
  height: 150px;
  border-left-color: transparent; 
  line-height: 100px;  /* FIXME: center text */
}

div[class^="room"]:nth-child(3):before {
  top: -4px;
  left: 45%;
  width: 60px;
  border-top: 2px solid #fff; 
}

div[class^="room"]:nth-child(3):after {
  left: 25px;
  bottom: -5px;
  height: 30px;
  width: 30px;
  border-width: 2px 2px 6px 3px;
  border-style: solid solid solid double;
  border-color: black black #f7f7f7 black;
  border-radius: 0 32px 0 0;
  -moz-border-radius: 0 32px 0 0;
  -webkit-border-radius: 0 32px 0 0;
}

div[class^="room"]:nth-child(4) {
  left: 1px;
  top: -165px;
  width: 177px; 
  height: 140px; 
  line-height: 100px;  
}

div[class^="room"]:nth-child(4):before {
  top: 30px;
  left: -4px;
  height: 60px;
  border: 1px solid #fff; 
}

div[class^="room"]:nth-child(4):after {
  right: -5px;
  bottom: 10%;
  height: 30px;
  width: 30px;
  border-width: 2px 5px 3px 2px;
  border-style: solid solid double solid;
  border-color: black #f7f7f7 black black;
  border-radius: 32px 0 0 0;
  -moz-border-radius: 32px 0 0 0;
  -webkit-border-radius: 32px 0 0 0;
}

div[class^="room"]:nth-child(5) {
  left: 1px;
  top: -169px;
  width: 177px; 
  height: 140px; 
  line-height: 100px;  
}

div[class^="room"]:nth-child(5):before {
  top: 30px;
  left: -4px;
  height: 60px;
  border: 1px solid #fff; 
}

div[class^="room"]:nth-child(5):after {
  right: -5px;
  bottom: 10%;
  height: 30px;
  width: 30px;
  border-width: 2px 5px 3px 2px;
  border-style: solid solid double solid;
  border-color: black #f7f7f7 black black;
  border-radius: 32px 0 0 0;
  -moz-border-radius: 32px 0 0 0;
  -webkit-border-radius: 32px 0 0 0;
}

div[class^="room"]:nth-child(6) {
  left: 188px;
  top: -406px;
  width: 197px; 
  height: 213px; 
  line-height: 190px;  
  border-top: transparent;
  border-left: transparent;
}

div[class^="room"]:nth-child(6):before {
  top: 30px;
  right: -4px;
  height: 60px;
  border: 1px solid #fff; 
}
div[class^="room"]:nth-child(6):after {
  right: -5px;
  bottom: 10%;
  height: 30px;
  width: 30px;
  border-width: 2px 5px 3px 2px;
  border-style: solid solid double solid;
  border-color: black #f7f7f7 black black;
  border-radius: 32px 0 0 0;
  -moz-border-radius: 32px 0 0 0;
  -webkit-border-radius: 32px 0 0 0;
}
div[class^="room"]:nth-child(7) {
  left: 46%;
  top: -410px;
  width: 197px; 
  height: 190px; 
  line-height: 190px;  
  /* border-top: transparent; */
  /* border-left: transparent; */
}

div[class^="room"]:nth-child(7):before {
  /* top: -2px;
  left: 45%;
  width: 60px;
  border-top: 2px solid #fff;  */
}
div[class^="room"]:nth-child(7):after {
  left: 20px;
  bottom: 83%;
  height: 33px;
  width: 25px;
  border-width: 3px 2px 2px 2px;
  border-style: double solid solid solid;
  border-color: black black black transparent;
  border-radius: 0 0 27px 0;
  -moz-border-radius: 0 0 27px 0;
  -webkit-border-radius: 0 0 27px 0;
}

</style>
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
<?php 
  $query="SELECT * From fpgen Where status='1'";
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result))
  {
    ?>
    <!-- <div id="msg">Floor Plan! Click the rooms!</div> -->
    <div id="plan">
      <div class="start"></div>
      <?php
      $my_array=array('r1'=>$row['room1'],'r2'=>$row['room2'],'r3'=>$row['room3'],'r4'=>$row['room4'],'r5'=>$row['room5'],'r6'=>$row['room6']);
      shuffle($my_array);
      
        ?>
        <div class="room"> 
          <p class="roomName"><?php  echo $my_array[0] ;?></p>
          <div class="simple-bulb">
            <div class="base"></div>
            <div class="light"></div>
          </div>
          <div class="door"></div>
        </div>
      
        <div class="room">
            <p class="roomName"><?php  echo $my_array[1] ;?></p>
            <div class="simple-bulb">
              <div class="base"></div>
              <div class="light"></div>
            </div>
            <div class="door"></div>
        </div>
      
        <div class="room">
            <p class="roomName"><?php  echo $my_array[2] ;?></p>
            <div class="simple-bulb">
              <div class="base"></div>
              <div class="light"></div>
            </div>
            <div class="door"></div>
        </div>
        
        <div class="room">  
            <p class="roomName"><?php  echo $my_array[3] ;?></p>
            <div class="simple-bulb">
              <div class="base"></div>
              <div class="light"></div>
            </div>
            <div class="door"></div>
        </div>
        <div class="room">
            <p class="roomName"><?php  echo $my_array[4] ;?></p>
            <div class="simple-bulb">
              <div class="base"></div>
              <div class="light"></div>
            </div>
            <div class="door"></div>
        </div>
        
        
        <div class="room">
            <p class="roomName"><?php  echo $my_array[5] ;?></p>
            <div class="simple-bulb">
              <div class="base"></div>
              <div class="light"></div>
            </div>
            <div class="door"></div>
        </div>
        <?php 
      //}?> 
    </div> 
    <?php
  }
?>
 </div>
      <div class="card-footer text-muted">
        2 days ago
      </div>
    </div>

    <!-- ======= Blog Page ======= -->
    
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>