<?php
  session_start();
  $command = "C:\Users\Ravi\AppData\Local\Programs\Python\Python36\python disease.py ".$_SESSION['age']." ".$_SESSION['gender']." ".$_SESSION['data']['Lymphocyte']." 1 ".$_SESSION['data']['Eosinophil']." ".$_SESSION['data']['Monocyte'];
  exec($command, $output);
  switch ($output['0']) {
    case '0':
      $disease = 'Bladder Cancer';
      break;
    case '1':
      $disease = 'Bone Cancer';
      break;
    case '2':
      $disease = 'Breast Cancer';
      break;
    case '3':
      $disease = 'Endometrical Cancer';
      break;
    case '4':
      $disease = 'Lymphoma';
      break;
    case '5':
      $disease = 'Melanoma';
      break;
    case '6':
      $disease = 'Pancreatic Cancer';
      break;
    case '7':
      $disease = 'Prostate Cancer';
      break;
    case '8':
      $disease = 'Testicular Cancer';
      break;
    default:
    $disease = 'Error';
      break;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Disease Prediction</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="favicon.png"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url(wbcbgde.jpg);">
      <div class="wrap-login100">
        <form class="login100-form" action="">
          <span class="login100-form-logo">
            <i class="fa fa-stethoscope"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            PathoTech Inc.
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <p class="input100">Patient Name</p>
            <span style="z-index: 100; color: white"><?php echo $_SESSION['name'];?></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <p class="input100">Predicted Disease</p>
            <span style="z-index: 100; color: white"><?php echo $disease;?></span>
          </div>
          
          <<!-- div class="container-login100-form-btn">
            <a href="index.html">
              <button class="login100-form-btn">
               Home
              </button>
            </a>
            
          </div> -->
        </form><center>
        <a href="index.html">
              <button class="login100-form-btn">
               Home
              </button>
            </a><br><br>

            <p style="color: white">wniderhfhiulertgetjhgieutjghijthgit</p>
          </center>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>