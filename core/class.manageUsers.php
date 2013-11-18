<?php 
	include_once('class.database.php');

	class ManageUsers{
		protected $link;

		function __construct(){
			$db_conn = new ManageDatabase;
			$this->link = $db_conn->connect();

			return $this->link;
		}

		function addUsers($username, $firstName, $lastName, $email, $password, $ipAddress, $userLevel){
			$query = $this->link->prepare("INSERT INTO users (username, firstName, lastName, email, password. ipAddress, userLevel) VALUES (?,?,?,?,?,?,?)");
			$values = array($username, $firstName, $lastName, $email, $password, $ipAddress, $userLevel);
			$query->execute($values);
			$rowCount  = $query->rowCount();

			return rowCount;
		}

		function loginUsers($username, $password){
			$query = $this->link->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1");
			$rowCount = $query->rowCount();

			$result = $query->fetchAll();

			session_start();
			$_SESSION['survey_username'] = $username;
			$_SESSION['survey_user_type'] = $result[0]['user_level'];

			//return $result;
			return $rowCount;
		}

		function listUsers($user_id = null){
			if(isset($user_id)){
				$query = $this->link->query("SELECT * FROM users WHERE id='$user_id' LIMIT 1");	
			}else{
				$query = $this->link->query("SELECT * FROM users ORDER BY id DESC");
			}
		
			$rowCount = $query->rowCount();

			if($rowCount >= 1){
				$result = $query->fetchAll();
			}else{
				$result = 0;
			}

			return $result;
		}

		function editUsers($user_id, $param){
			foreach ($param as $key => $value) {
				$query = $this->link->query("UPDATE users SET $key = '$value' WHERE id = '$user_id' LIMIT 1");
			}

			$rowCount  = $query->rowCount();
			return rowCount;
		}

		function deleteUsers($user_id){
			$query = $this->link->query("DELETE FROM users WHERE id = '$user_id' LIMIT 1");

			$rowCount  = $query->rowCount();
			return rowCount;
		}
	}

	//$init = new ManageUsers;

?>