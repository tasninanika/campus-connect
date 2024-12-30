<?php
	include("../db_con/dbCon.php");
	if(isset($_GET['unblock_id'])){
		
		$id = $_GET['unblock_id'];
		//echo $id;exit;
		$findSql="SELECT * FROM user where u_id='$id'";
		$resultData=$db->query($findSql);
		foreach($resultData as $items){
			$first_Name=$items['first_Name'];
			$last_Name=$items['last_Name'];
			$password=$items['password'];
			$email=$items['email'];
		}
		
		$sql = "UPDATE `user` SET `status`='Active' WHERE u_id='$id'";
		//echo $sql;
		$db->query($sql);
		header("Location:a_students.php");
	}
?>