
<?php
	
	//print_r($_GET);
	//print_r($_POST);
	
	if(isset($_POST['submit']))
	{

		$name 		= $_POST['myname'];
		$password 	= $_POST['password'];

		if($name == "" || $password == ""){
			echo "null submission";
		}else{
			echo "success...";
		}
	}else{
		echo "Invalid request...";
	}
?>