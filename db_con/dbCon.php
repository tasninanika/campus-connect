<?php 

$db = new mysqli('localhost','root','','alumni_management');

if($db->connect_error){
	echo "Error connecting database";
}

 ?>