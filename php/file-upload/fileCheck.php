<?php

	$file_info = $_FILES['myfile'];
	//echo $file_info['tmp_name'];

	//$path = 'upload/'.$file_info['name'];
	
	$path = 'upload/'."abc.png";


	if(move_uploaded_file($file_info['tmp_name'], $path)){
		echo "success";
	}else{
		echo "Error";
	}
?>