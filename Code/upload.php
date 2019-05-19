<?php
	session_start();
	if(isset($_POST)){
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['age'] = $_POST['age'];
		$_SESSION['gender'] = $_POST['gender'];
		$files = glob('bloodsmear/*');
		foreach($files as $file){ 
		  if(is_file($file))
		    unlink($file);
		} 
		$go = 0;
    if(count($_FILES['upload']['name']) > 0){
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            //Make sure we have a filepath
            if($tmpFilePath != ""){
            
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];

                //save the url and the file
                $filePath = "bloodsmear/" .$_FILES['upload']['name'][$i];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {

                    $files[] = $shortname;

                }
                else {
                	$go = 1;
                }
              }
              else{
              	$go = 1;
              }
        }
    }
		if ($go!=0) {
			echo "Error";
		}
		else{
			/*echo"<script>window.location.href='wbc.php'</script>";*/
			header('Location:predict_page.php');
		}
	}

 
			
			
		
	