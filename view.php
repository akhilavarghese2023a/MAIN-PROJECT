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
        <li><a class="nav-link scrollto " href="index.php">Home</a></li>
        <li><a class="nav-link scrollto active" href="profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="floorplan.php">FloorPlan</a></li>
          <li><a class="nav-link scrollto" href="changepass.php">Change Password</a></li>
          <!-- <li><a class="nav-link scrollto" href="floorplangen.php">Floor Plan Generator</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="cart.php">cart</a></li> -->
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
			<h1>Add To Cart </h1><hr>
			<a href='viewcart.php'>View Cart</a>
			<?php 
			if(isset($_POST["addCart"])){
				if(isset($_SESSION["cart"]))
				{
					$pid_array=array_column($_SESSION["cart"],"pid");
					if(!in_array($_GET["id"],$pid_array))
					{
						$index=count($_SESSION["cart"]);
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][$index]=$item;
							echo "<script>alert('Product Added..');</script>";
						header("location:viewCart.php");
					}
					else
					{
						echo "<script>alert('Already Added..');</script>";
					}
				}
				else
				{
						$item=array(
							'pid' => $_GET["id"],
							'pname' => $_POST["pname"],
							'price' => $_POST["price"],
							'qty' => $_POST["qty"]
						);
						$_SESSION["cart"][0]=$item;
						echo "<script>alert('Product Added..');</script>";
						header("location:viewCart.php");
				}
			}
			
			$sql="select * from products where pid='{$_GET["id"]}'";
			$res=$conn->query($sql);
			if($res->num_rows>0)
			{
				echo '<form action="'.$_SERVER["REQUEST_URI"].'" method="post">';
				if($row=$res->fetch_assoc())
				{
			echo  '
   <div class="col-sm-4 col-lg-3 col-md-3 text-center">    
   <img src="../A_adminn/msg_img/'. $row['image'] .'" alt="" class="img-responsive" >
     <p><strong><a href="#">'. $row['pname'] .'</a></strong></p>
     <h4 class="text-danger"> Rs.'. $row['price'] .'</h4>
	<p><input type="number"  placeholder="Enter Qty" name="qty" min="1" max="15" class="form-control"></p>
	<p><input type="hidden"  name="pname" value="'. $row['pname'] .'" class="form-control"></p>
	<p><input type="hidden"  name="price" value="'. $row['price'] .'" class="form-control"></p>
	<p><input type="submit" name="addCart" class="btn btn-success" value="Add to Cart"></p>
   </div>
   ';
				}
				echo '</form>';
			}
			?>
  </div>
</div>

    <!-- ======= Blog Page ======= -->
    
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>