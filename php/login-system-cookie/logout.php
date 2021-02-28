<?php

	//session_start();
	//unset($_SESSION['flag']);
	
	setcookie('flag', true, time()-1, '/');
	header('location: login.html');

?>