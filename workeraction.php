<?php
include("../config.php");
session_start();
if(isset($_POST["btnsubmit"]))
{
    // $wname=$_POST['idcp'];
    $contractor=$_POST['contractor'];
    $username=$_SESSION['user_name'];
    $todate=$_POST['todate'];
    $fromdate=$_POST['fromdate'];
    $work=$_POST['work'];
    
    $sql=mysqli_query($conn,"INSERT INTO tbl_uw(wname,username,todate,fromdate,work,status) VALUES('$contractor','$username','$todate','$fromdate','$work','Pending')");

    
    
    if($sql)
      {
       $_SESSION['status'] = "your request has sucessfully sent to the builder wait for the conformation.. Thankyou..!";
       
       header('Location: workers.php');
      }
    else
      {
        $_SESSION['status']="Data not inserted/Already Exit";
       
       header('Location: workers.php');
    
      }
    }
    
    
  	
?>