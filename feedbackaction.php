
<?php 
include ('../config.php');
session_start();


$lid=$_SESSION['user_name'];
// $idc= $_POST['idb']

if(isset($_POST["btnsubmit"]))
{
 
  $star=$_POST['star'];
  $feedback=$_POST['feedback'];
  $sql1=mysqli_query($conn,"INSERT INTO feedback(username,bid,star,feedback,status)VALUES('$lid','$idc','$star','$feedback','0')");
  header("location:feedback1.php");
    
    }
   
    
    
  	
?>
