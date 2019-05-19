<?php
  session_start();
  $command = "C:\Users\Ravi\AppData\Local\Programs\Python\Python36\python disease.py ".$_SESSION['age']." ".$_SESSION['gender']." ".$_SESSION['data']['Lymphocyte']." 1 ".$_SESSION['data']['Eosinophil']." ".$_SESSION['data']['Monocyte'];
  exec($command, $output);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Parallax Website Demo</title>
  <link rel="stylesheet" href="css/style.css">

</head>

<body>
 
 
<div class="navbar1">
  <a href="C:\Users\zutshidk\Documents\flask_app\front_end\index.html">Home</a>
  <a href="C:\Users\zutshidk\Documents\flask_app\front_end\input_page.html">Predict</a>
  <a href="#contact">Results</a>
</div>


<div class="pimg1">
  <div class="ptext">
    <span class="border trans" style="color: #000000">
        <?php echo $_SESSION['name']." <br><br>has<br><br> ".$output[0]; ?>
    </span>
  </div>
</div>

  <section class="section section-dark">
    <h2>Section Two</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  
</body>
</html>
