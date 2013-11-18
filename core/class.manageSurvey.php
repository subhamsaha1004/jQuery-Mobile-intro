<?php
	
	include_once('class.database.php');
	
	class ManageSurvey {

		protected $link;

		function __construct(){
			$db_conn = new ManageDatabase;
			$this->link = $db_conn.connect();

			return $this->link;
		}

		function addSurvey($username, $inspected, $issues, $comments,$ip_address, $date, $time) {
			$query = $this->link->prepare("INSERT INTO survey (username, inspected, issues, comments, ip_address, date, time) VALUES (?,?,?,?,?,?,?)");
			$values = array($username, $inspected, $issues, $comments,$ip_address, $date, $time);
			$query->execute($values);
			$rowCount= $query->rowCount();

			return $rowCount;
		}

		function listSurvey($param = null){
			if(isset($param)){
				foreach ($param as $key => $value) {
					$query = $this->link->prepare("SELECT * FROM survey WHERE $key = '$value' ORDER BY id DESC");
				}
				
			}else{
				$query = $this->link->prepare("SELECT * FROM survey ORDER BY id DESC");
			}

			$rowCount= $query->rowCount();
			if($rowCount >= 1){

				$result = $query->fetchAll();
			}else{
				$result = 0;
			}

			return $result;
		}


		function editSurvey($survey_id, $param){
			foreach ($param as $key => $value) {
				$query = $this->link->query("UPDATE survey SET $key = '$value' WHERE id = '$survey_id' LIMIT 1");
			}

			$rowCount  = $query->rowCount();
			return rowCount;
		}

		unction deleteSurvey($survey_id){
			$query = $this->link->query("DELETE FROM users WHERE id = '$survey_id' LIMIT 1");

			$rowCount  = $query->rowCount();
			return rowCount;
		}

	}

?>