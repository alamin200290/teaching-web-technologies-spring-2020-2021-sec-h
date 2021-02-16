<?php
	
	//print_r($_GET);
	//print_r($_POST);
	
	/*if(isset($_POST['submit']))
	{

		$name 		= $_POST['myname'];
		$password 	= $_POST['password'];

		if($name == "" || $password == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Name input</title>
</head>
<body>

	<form method="POST" action="">
		<fieldset>
			<legend>NAME</legend>
			Name: <input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname']; }?> ">  <br>
			Password: <input type="password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; }?>"> <br>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>