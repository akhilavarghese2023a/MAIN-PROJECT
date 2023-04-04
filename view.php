<?php
include ('../config.php');
session_start();
$user=$_SESSION['user_name'];
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
    .img1 {
  border-radius: 50%;
  width: 50px;
  height: 50px;
  margin-right: 100px;

    }
    .new-class-name {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-right: 500px;

}

.logo {
  margin-right: 90px;
  
}

  </style>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="new-class-name">
    <a href="index.php"><img src="assets/img/logo.webp" alt="" class="img-fluid img1"></a>
      <div class="logo">
        <h1><a href="index.html"><span>Dream</span>Home</a></h1>
        </div>

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto " href="index.php">Home</a></li>
        <li><a class="nav-link scrollto active" href="profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="floorplan.php">FloorPlan</a></li>
          <li><a class="nav-link scrollto" href="changepass.php">Change Password</a></li>
          <li><a class="nav-link scrollto" href="floorplangen.php">Floor Plan Generator</a></li>
          <li><a class="nav-link scrollto" href="cart.php">cart</a></li>
          <li class="dropdown"><a href="#"><span>Builders</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="builders.php">Available Builders</a></li>
                  <li><a href="status.php">Status OF Request</a></li>
                  <li><a href="chat/real_chat/index.php">Live Chat To Builders</a></li>

                  
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
      if(isset($_POST["addCart"]))
      {
        $pid=$_GET["id"];
        $pname=$_POST["pname"];
        $price=$_POST["price"];
        $qty=$_POST["qty"];
        $username=$user;
        $total=$price*$qty;
        $sql="SELECT * FROM `tbl_cart` WHERE pid='$pid' and username='$username' and status='1'";
        $result=mysqli_query($conn,$sql);
        if($rows=mysqli_num_rows($result)>0)
        {
          echo"already added";
        }
        else
        {
          $query = "SELECT quantity FROM products WHERE pid = $pid ";
          $resultt = mysqli_query($conn, $query);
          $row = mysqli_fetch_assoc($resultt);
          $quantity_available = $row['quantity'];
          if ($quantity_available < $qty) {
            echo "<script>alert('Sorry, there is not enough quantity available for this product!!')</script>";
          } 
          else
           {
           $sql="INSERT INTO `tbl_cart`(`pid`, `pname`, `price`, `qty`,`total`, `username`,`status`) VALUES ('$pid','$pname','$price','$qty','$total','$username',1)";
          $resul=mysqli_query($conn,$sql);
          if($resul)
          {
            $new_quantity = $quantity_available  - $qty;
            $sql = "UPDATE products SET quantity = $new_quantity WHERE pid = $pid";
            if ($conn->query($sql) === TRUE) {
                echo "Quantity updated successfully";
                echo"added successfully";
            } else {
          }
        }


      }
    }
  }
			
			$sql="select * from products where pid='{$_GET["id"]}'";
			$res=$conn->query($sql);
			if($res->num_rows>0)
			{
          echo '<form action="" method="post">';
            if($row=$res->fetch_assoc())
            {
              echo'
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