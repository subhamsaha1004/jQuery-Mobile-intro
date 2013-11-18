<?php

	session_start();
	if(!isset($_SESSION['survey_username'])){
		header('location: login.php');
	}

?>