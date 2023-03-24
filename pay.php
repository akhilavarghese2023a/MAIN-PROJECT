<?php
include ('../config.php');
session_start();
$user=$_SESSION['user_name'];
$sql="select * from registration where username='$user'";
$rs= mysqli_query($conn,$sql);
$gtotal=$_GET['gtotal'];
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

    .button {
    display: block;
    width: 250px;
    height: 50px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 80px;
    color: white;
    font-weight: bold;
    line-height: 25px;
    margin: 0 auto;
    }

        
        /* Main */
        .main {
            margin-top: 2%;
            margin-left: 20%;
            margin-right: 20%;
            padding: 0 10px;
            width: 58%;
        }
        .main h2 {
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .main .card {
            background-color: #fff;
            border-radius: 18px;
            box-shadow: 1px 1px 8px 0 grey;
            height: auto;
            /* margin-bottom: 20px; */
            padding: 20px 0 20px 50px;
        }
        .main .card table {
            border: none;
            font-size: 16px;
            height: 300px;
            margin-left:auto; 
            margin-right:auto;
            width: 100%;   
        }
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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
        <li><a class="nav-link scrollto " href="profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="floorplan.php">FloorPlan</a></li>
          <li><a class="nav-link scrollto" href="changepass.php">Change Password</a></li>
          <li><a class="nav-link scrollto" href="floorplangen.php">Floor Plan Generator</a></li>
          <li><a class="nav-link scrollto active" href="cart.php">cart</a></li>
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
                  <h2 class="title3">Pay</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
     
    <br><br>
    <div class="card text-center" style="width:90%; margin-left:5%;">
    <div class="main">
            <div class="card">
                <div class="card-body">
                    
                        <table>
                            <tbody>
                                <tr>
                                 <td>User name</td>
                                 <td>:</td>
                                  <td>
                                   <?php
                                     echo $_SESSION['user_name'];
                                    ?>
                                  </td>
                                </tr>
                                <?php 
                               while($row = mysqli_fetch_array($rs)) {
                                   ?>
                                <tr>
                                  <td>First name</td>
                                   <td>:</td>                            
                                  <td>
                                   <input type="text" class="form-control" name="fname" id="name" value="<?php echo $row['fname'];?>" autocomplete="off" onkeyup="return Validstr1()"
                                    required pattern="[a-zA-Z]{3,30}" oninvalid="setCustomValidity('input is incorrect !!')"  oninput="setCustomValidity('')"
                                    maxlength="30" onkeyup="return validation()">
                                  </td>
                                    
                                </tr>
								<tr><td><span id="msg" style="color:red;"> </span></td></tr>
                                <tr>
                                    <td>last name</td>
                                    <td>:</td>
                                    <td>
                                    <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $row['lname'];?> " autocomplete="off" onkeyup="return Validstr2()"
                                    required pattern="[a-zA-Z]{3,30}" oninvalid="setCustomValidity('input is incorrect !!')"  oninput="setCustomValidity('')"  maxlength="30">
                                    </td>
                                    
                                </tr>
                                <tr><td><span id="lmsg" style="color:red;"> </span></td></tr>
                              
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>
                                    <input  type="text" name="email" value="<?php echo $row['email'];?> " id="email"  required pattern="/^[\w\+\'\.-]+@[\w\'\.-]+\.[a-zA-Z]{2,}$/" onkeyup="return Validateemail()">
                                    </td>
                                </tr>
                                <tr><td><span id="email1" style="color:red;"> </span></td></tr>
                                <tr>
                                    <td>Address </td>
                                    <td>:</td>
                                    <td>
                                    <textarea class="form-control"rows="5" id="address" name="address" requiredrequired pattern="[a-zA-Z]{3,30}"  oninvalid="setCustomValidity('fill address !!')" 
                                    oninput="setCustomValidity('')" maxlength="30"><?php echo $row['address'];?> </textarea>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>phone number</td>
                                    <td>:</td>
                                    <td>
                                    <input type="text" class="form-control" value="<?php echo $row['phonenumber'];?> " min="10" maxlength="10" id="phonenumber" name="phonenumber" required onkeyup="return Validphone()"
                                    pattern="[0-9]{3}[0-9]{3}[0-9]{4}" oninvalid="setCustomValidity('fill phoneno !!')"   oninput="setCustomValidity('')" maxlength="30"> 
                                    </td>
                                </tr>
                                <tr><td><span id="msg2" style="color:red;"> </span></td></tr>
                                <tr>
                                    <td>Grand Total</td>
                                    <td>:</td>                            
                                    <td>
                                    <input type="text" class="form-control" name="amount" id="amount"  autocomplete="off" onkeyup="return Validstr1()" value="<?php echo $gtotal?>">
                                    </td>
                                    
                                </tr>
                               
                                <?php
                            }?>
                            </tbody>
                         </table>
                        <div >
                        <?php
									$apiKey="rzp_test_nJgz6ZJ7xJkb1G";
									$gt=round($gtotal,2);
								?>
								<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
								<form action="try.php?username=<?php echo $user?>" method="POST">
									<script
										src="https://checkout.razorpay.com/v1/checkout.js"
										data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
										data-amount="<?php echo $gt*100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
										data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
										data-id="order_CgmcjRh9ti2lP7"// Replace with the order_id generated by you in the backend.
										data-buttontext="Proceed to pay"
										data-name="Dream Home"
										data-description="Thank you"
										data-image="https://st4.depositphotos.com/31445094/41249/v/1600/depositphotos_412499652-stock-illustration-perfume-icon-design-template-isolated.jpg"
										data-prefill.name="Admin"
										data-prefill.email=""
										data-theme.color="#F37254"
									>										
									</script>
									<input type="hidden" custom="Hidden Element" name="hidden" class="btn btn-primary">
								</form>
								<!--gateway end-->
							
								<style>
									.razorpay-payment-button{
										background-color: #0DCAF0;
										color: white;
										font-size: 18px;padding: 8px 10px;font-weight: bold;
										border-radius: 12px; border: none;text-align: center; 
									}
								</style>
                     </div>
                  
            </div>
        </div>
  			
        </div>

<!-- ======= Blog Page ======= -->

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>