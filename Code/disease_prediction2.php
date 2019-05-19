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
<html>
<head>
<meta name ="viewport" content="width=device-width, initial-scale=1.0">
<title>Predicted Disease</title>

<link rel="stylesheet" href="css\diseasepage.css">
<style type="text/css">
  .pimg1, .pimg2, .pimg3{
  position:relative;
  opacity:1;
  background-position:center;
  background-size:cover;
  background-repeat:no-repeat;

  
    /*fixed = parallax
    scroll = normal*/
  
  background-attachment:fixed;
}

.pimg1{
  margin-top: 0px;
  background-image:url('wbcbg.jpg');
  min-height:100%;
}
.ptext{
  position:absolute;
  top:50%;
  width:100%;
  text-align:center;
  color:#000;
  font-size:32px;
  letter-spacing:8px;
}

.ptext .border{
  color:#38874d;
  padding:15px;
}
</style></head>
<body>
  

<div class="pimg1">
  <div class="ptext">
    <span class="border" style="background-color: #000000;">
        PathoTech Inc.
    </span>
  </div>
</div>
  <a name="target_section"></a>
  <section id="section-a">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit minus impedit maxime, quae soluta quis cumque perferendis! Doloribus quaerat, placeat iste facere, aspernatur ex cum veritatis laudantium, officia, non porro exercitationem incidunt quis dolore? Officia ex accusamus expedita optio, voluptatem minus? In maiores omnis aperiam earum ab molestiae beatae laborum blanditiis incidunt, delectus dolor, id voluptates optio aspernatur aliquam saepe atque labore? Tempore reprehenderit ab ipsam perspiciatis ut, provident perferendis sapiente in numquam blanditiis, enim, illo error nulla incidunt quos quidem ratione repellat ipsa molestias veritatis? Mollitia, fugit dolore commodi porro repudiandae atque, eos, ipsum quam culpa fuga deleniti quae.</p>
  </section>
  <section id="section-b">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit minus impedit maxime, quae soluta quis cumque perferendis! Doloribus quaerat, placeat iste facere, aspernatur ex cum veritatis laudantium, officia, non porro exercitationem incidunt quis dolore? Officia ex accusamus expedita optio, voluptatem minus? In maiores omnis aperiam earum ab molestiae beatae laborum blanditiis incidunt, delectus dolor, id voluptates optio aspernatur aliquam saepe atque labore? Tempore reprehenderit ab ipsam perspiciatis ut, provident perferendis sapiente in numquam blanditiis, enim, illo error nulla incidunt quos quidem ratione repellat ipsa molestias veritatis? Mollitia, fugit dolore commodi porro repudiandae atque, eos, ipsum quam culpa fuga deleniti quae.</p>
  </section>
  <section id="section-c">
    <div class="box-1">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolorum est, molestias dolores quis sunt nobis temporibus veritatis libero odio!
    </div>
    <div class="box-2">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolorum est, molestias dolores quis sunt nobis temporibus veritatis libero odio!
    </div>
    <div class="box-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa dolorum est, molestias dolores quis sunt nobis temporibus veritatis libero odio!
    </div>
  </section>
</body>
</html>
