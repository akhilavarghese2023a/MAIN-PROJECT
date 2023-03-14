<?php
include ('../config.php');
session_start();
// $user=$_SESSION['user_name'];
$sql="select * from registration where username='".$_SESSION['user_name']."'";
$rs= mysqli_query($conn,$sql);
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
  <style>
    #card{
      width="50%";
    }
  </style>
</head>
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
        <li><a class="nav-link scrollto " href="profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="floorplan.php">FloorPlan</a></li>
          <li><a class="nav-link scrollto" href="changepass.php">Change Password</a></li>
          <!-- <li><a class="nav-link scrollto" href="floorplangen.php">Floor Plan Generator</a></li> -->
          <!-- <li><a class="nav-link scrollto active" href="cart.php">cart</a></li> -->
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
    <div class="card text-center" style="width:90%; margin-left:5%;">
      <div class="card-body">
      <div class="container">
  <div class="row">
			<h1>Cart Items</h1><hr>
			<a href='index.php'>Home</a>
			<table class='table'>	
				<tr>
					<th>Item Name</th>
					<th>Qty</th>
					<th>Price</th>
					<th>Total</th>
					<th>Remove</th>
				</tr>
				<?php 
				if(isset($_GET["del"]))
				{
					foreach($_SESSION["cart"] as $keys=>$values)
					{
							if($values["pid"]==$_GET["del"])
							{
								unset($_SESSION["cart"][$keys]);
							}
					}
				}
					if(!empty($_SESSION["cart"]))
					{
							$total=0;
							foreach($_SESSION["cart"] as $keys=>$values)
							{
								$amt=$values["qty"]*$values["price"];
									$total+=$amt;
									echo "
											<tr>
												<td>{$values["pname"]}</td>
												<td>{$values["qty"]}</td>
												<td>{$values["price"]}</td>
												<td>{$amt}</td>
												<td><a href='viewCart.php?del={$values["pid"]}'>Remove</a></td>
											</tr>
									";
									
							}	
								echo "
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td>Total</td>
												<td>{$total}</td>
											</tr>";							
							
					}
				?>
			</table>
			
  </div>

    <!-- ======= Blog Page ======= -->
    
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>