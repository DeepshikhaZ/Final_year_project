<!DOCTYPE html>
<html>
<head>
	<title>TEST PHP</title>
</head>
<body>
	<form method="post" action="upload.php" enctype="multipart/form-data">
	NAME: <input type="text" name="name"> <br>
	AGE: <input type="text" name="age"><br>
	GENDER: <input type="radio" name="gender" value="0">M	
	<input type="radio" name="gender" value="1">F <br>
	<input type="file" id="upload" name="upload[]" multiple><br>
	<input type="submit" value="Submit">
	</form>
</body>
</html>
	
