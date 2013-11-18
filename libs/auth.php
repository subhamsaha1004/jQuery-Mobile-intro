<?php 

	if($_POST){
		include_once('../core/class.manageUsers.php');

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if(empty($username) && empty($password)){
			echo 'All fields are required';
		}else{
			$password = md5($password);
			$init = new ManageUsers;
			$login = $init->loginUsers($username, $password);	

			if($login == 1){
				echo "true";
			}else{
				// echo '<pre>';
				// print_r($login);
				// echo '</pre>';
				echo 'Invalid Credentials';
			}
		}
	}
	
?>