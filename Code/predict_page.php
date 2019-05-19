<?php
  session_start();
  exec("C:\Users\Ravi\AppData\Local\Programs\Python\Python36\python wbc.py",$output);
  $files = glob('bloodsmear/*');
  $counts = array_count_values($output);
  arsort($counts);
  $i = 1;
  $data = array();
  foreach ($counts as $key => $value) {
    if($i==1){
      $data[$key] = 3;
    }
    else if($i==4){
      $data[$key] = 1;
    }
    else{
      $data[$key] = 2;
    }
    $i++;
  }
  $_SESSION['data'] = $data;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WBC Classification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
* {
  box-sizing: border-box;
  font-family: 'Armata';
}
h2{
  margin-top: 90px;
}
img{
  margin-top: 10px;
}
.imagebox {
  background: black;
  padding: 0px;
  position: relative;
  text-align: center;
  width: 100%;
}

.imagebox img {
  opacity: 1;
  transition: 0.5s opacity;
}

.imagebox .imagebox-desc {
  background-color: rgba(0, 0, 0, 0.6);
  bottom: 0px;
  color: white;
  font-size: 1.2em;
  left: 0px;
  padding: 10px 15px;
  position: absolute;
  transition: 0.5s padding;
  text-align: center;
  width: 100%;
}

.imagebox:hover img {
  opacity: 0.7;
}

.imagebox:hover .imagebox-desc {
  padding-bottom: 10%;
}
.login100-form-btn {
  font-size: 16px;
  color: #555555;
  line-height: 1.2;
  border: 2px solid black;

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  min-width: 120px;
  height: 50px;
  border-radius: 25px;

  background: #9152f8;
  background: -webkit-linear-gradient(bottom, #004d00, #000000);
  background: -o-linear-gradient(bottom, #004d00, #000000);
  background: -moz-linear-gradient(bottom, #004d00, #000000);
  background: linear-gradient(bottom, #004d00, #000000);
  position: relative;
  z-index: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  border-radius: 25px;
  background-color: #fff;
  top: 0;
  left: 0;
  opacity: 1;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  color: #fff;
}

.login100-form-btn:hover:before {
  opacity: 0;
}



</style>

</head>
<body>
<div class="navbar1">
 <a href="#"><img style="height: 60px;width: 60px; margin-bottom: 10px" src="logo755.png"></a>
  <a href="upload.html">Previous</a>
  <a href="index.html#contact">Contact</a>
  <a href="index.html">Home</a>
</div>


<h2></h2>
<div class="container">
  <div class="row">
    <?php
    $i=0;
    foreach($files as $file){ 
      if(is_file($file)){
          echo "<div class='col-sm-4'>";
          echo "<div class='imagebox'>";
          echo "<img src='".$file."'  class='category-banner img-responsive'>";
          echo "<span class='imagebox-desc'>".$output[$i]."</span>";
          echo "</div></div>";
      }
      $i++;
    }
    /*foreach ($data as $key => $value) {
      echo "<p>".$key." is ".$value."<p><br>";
    }*/
  ?>
  </div>
</div>
<br>
<center><a href="disease_prediction.php"><button class='login100-form-btn '>Predict Disease</button></a></center>
<br> <br> <br> 
</body>
</html>