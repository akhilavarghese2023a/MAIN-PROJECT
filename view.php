<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "hb";
$conn=mysqli_connect($servername,$username,$password,$database);
     session_start();
     $username=$_GET['username'];



$sq = "SELECT * FROM `feedback` WHERE busername='$username'";
$resul = $conn->query($sq);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                                                echo $_SESSION['user_name'];

                      ?> <a href="../login/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                     
                        <a  href="changepasssw.php"><i class="fa fa-qrcode fa-3x"></i> change password</a>
                    </li>
						
                      <li  >
                        <a  href="table.php"><i class="fa fa-table fa-3x"></i> Admin Appproval</a>
                    </li>
                    <li  >
                        <a class="active-menu"   href="buildersreview.php"><i class="fa fa-bar-chart-o fa-3x"></i> Builders Review</a>
                    </li>	
                    <li  >
                        <a   href="#"><i class="fa fa-user fa-3x"></i>Products</a> <ul class="nav nav-second-level">
                        <li>
                                <a href="addproduct.php">Add products</a>
                            </li>
                             <li>
                                <a href="editproduct.php">Edit Products</a>
                            </li>
                            <li>
                                <a href="viewproduct.php">View Products </a>
                            </li>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>PERFORMANCE ANALAYSIS </h2>   
                        <!-- <h5>Welcome  Admin, Love to see you back. </h5>
                    </div>
                    <p style="color:white ;">Welcome</p>
                    
                    <?php
                    echo '<center>welecome to admin page ';
                    echo '<center><h2 style="color:black ;"><b>'.$_SESSION['user_name'].'</b></h2>';

                        ?> -->

              </ul>
            </div><br><br>
<?php
if ($resul->num_rows > 0) {
    $texts = array();
    while ($row = $resul->fetch_assoc()) {
        $texts[] = $row["feedback"];
    }
    $url = 'http://127.0.0.1:5000/sentiment';
    $data = json_encode(array('texts' => $texts));
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data,
        ),
    );
    $context  = stream_context_create($options);
    $resul = file_get_contents($url, false, $context);
    $resul = json_decode($resul, true);
  
    $positive = $resul['positive'];
    $negative = $resul['negative'];
    $neutral = $resul['neutral'];
    $total = $positive + $negative + $neutral;
  
    $pos_percent = ($positive / $total) * 100;
    $neg_percent = ($negative / $total) * 100;
    $neu_percent = ($neutral / $total) * 100;
    $pos_accuracy = ($pos_percent >( $neu_percent+$neg_percent)) ? $pos_percent : (100 -( $neu_percent+$neg_percent));
      $neg_accuracy = ($neg_percent > ($neu_percent+$pos_percent)) ? $neg_percent : (100 - ($neu_percent+$pos_percent));
    $neutral_accuracy = ($neu_percent > ($pos_percent + $neg_percent)) ? $neu_percent : (100 - ($pos_percent + $neg_percent));
  
   } else {
    echo "No comments.";
    $pos_percent = 0;
    $neg_percent = 0;
    $neu_percent=0;
    $neu_percent = 0;
    $pos_accuracy = 0;
    $neg_accuracy = 0;
    $neu_accuracy = 0;
    $neutral_accuracy=0;
  }
  ?>
  <div class="container-fluid">        
      <!-- <h1>Sentiment Analysis </h1> -->
      <div class="chart-container" style="margin-left:10%; width: 50%;
    height: 50%;">
          <canvas id="sentiment-chart"></canvas>
      </div>
      <div>
      <p>Positive: <?php echo $pos_accuracy ; ?></p>
      <p>Negative: <?php echo $neg_accuracy; ?></p>
      <p>Neutral: <?php echo $neutral_accuracy; ?></p>
  </div>
  </div>
  
      <script>
          var ctx = document.getElementById('sentiment-chart').getContext('2d');
          var chart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ['Positive: <?php echo $positive ."/".$total ?>', 'Negative: <?php echo $negative ."/".$total;?>', '<?php echo $neutral ."/".$total; ?>'],
                  datasets: [{
                      label: 'Performance Analysis percentage',
                      data: [<?php echo $pos_percent; ?>, <?php echo $neg_percent; ?>, <?php echo $neu_percent; ?>],
                      backgroundColor: [
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)'
                      ],
                      borderColor: [
                          'rgba(75, 192, 192, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(54, 162, 235, 1)'
                      ],
                      borderWidth: 1,
                    
                  }]
              },
              
              options: {
                  scales: {
                      y: {
                          beginAtZero: true,
                          ticks: {
                              stepSize: 10,
                              max: 100
                          }
                      }
                  }
              }
          });
      </script>






            <div class="text-center">
                <label for="builders">Builders List</label>
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                        <th>Serial No:</th>
                        <th>User Name</th>
                        <th>Feedback</th>
                        <th>star</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sq="SELECT * FROM `feedback` WHERE busername='$username'";
                            $resul=mysqli_query($conn,$sq);
                            $count=1;
                            while($rows=mysqli_fetch_assoc($resul))
                            { 
                                if(mysqli_num_rows($resul)>0)   
                                {                            
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $count ?></th>
                                        <td><?php echo $rows['username']; ?></td>
                                        <td><?php echo $rows['feedback']; ?></td>
                                        <td><?php echo $rows['star']; ?></td>
                                    
                                    </tr>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td>
                                            Sorry no records
                                        </td>
                                    </tr>
                                    <?php
                                }
                                $count+=1;
                            }
                            ?>                        
                    </tbody>
                </table>
            </div>
        </div>
        
        </div>
        
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>
