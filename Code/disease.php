<?php
	session_start();
	$command = "C:\Users\Ravi\AppData\Local\Programs\Python\Python36\python disease.py ".$_SESSION['age']." ".$_SESSION['gender']." 1 ".$_SESSION['data']['Monocyte']." ".$_SESSION['data']['Eosinophil']." ".$_SESSION['data']['Lymphocyte'];
	exec($command, $output);
	echo $_SESSION['name']." has ".$output[0];
	
