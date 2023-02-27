<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

-->
<?php session_start();
 $r= $_SESSION['user_name'];
//  $idcc= $_POST['idb'];

 if($r!="")
 {

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>feedback</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" />
	
	
</head>

<body><style>

			</style>

			<h3 class="tittle-w3l">Feedback
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="feedbackaction.php" method="post">
							
							<div class="customer-rev left-side">
								
								
							<ul>	<li>
							<input type="radio" name="star" value="5">
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								
							</a>&nbsp&nbsp&nbsp&nbsp
							<input  type="radio" name="star" value="4">
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								
							</a>&nbsp&nbsp&nbsp&nbsp
							<input  type="radio" name="star" value="3">
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								
							</a>&nbsp&nbsp&nbsp&nbsp
							<input  type="radio" name="star" value="2">
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								
							</a>
							&nbsp&nbsp&nbsp&nbsp
							<input  type="radio" name="star"  value="1">
							<a href="#">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								
							</a>
						</li>
						</ul>
								
							</div>
							
							<div class="">
								<textarea placeholder="Feedback" name="feedback" required=""></textarea>
							</div>
                            <!-- <input type="hidden" name ="idb" value="<?php echo $row['idcc'];?>"/> -->

							<input type="submit" name="btnsubmit" value="Submit">
						</form>
					</div>
					

</body>

</html>
<?php
 }
 else
 {
	 die(header("location:../Guest/index.php"));
 }
?>