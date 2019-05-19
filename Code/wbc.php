<?php
	session_start();
	exec("C:\Users\Ravi\AppData\Local\Programs\Python\Python36\python wbc.py",$output);
	$files = glob('bloodsmear/*');
	$_SESSION['wbc'] = $output;
	print_r($output);
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
	<html>
	<head>
		<title>WBC Classification</title>
	</head>
	<body>
	<?php
		$i=0;
		foreach($files as $file){ 
			if(is_file($file)){
		  		echo "<img src='".$file."'>";
		  		echo "<p>".$output[$i]."</p>";
			}
			echo "<br>";
			$i++;
		}
		foreach ($data as $key => $value) {
			echo "<p>".$key." is ".$value."<p><br>";
		}
	?>
	<a href="disease.php"><button>Predict Disease</button></a>
	</body>
	</html>	
	