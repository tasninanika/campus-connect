<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $alumni_id = $_SESSION['alumni_id'];
    

    // Get POST data and sanitize
    $resource_id = uniqid('Resource');
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $content = mysqli_real_escape_string($db, $_POST['content']);
    $file = mysqli_real_escape_string($db, $_POST['file']);

    // Create SQL query to post job information
    $sql = "INSERT INTO `resources` (`material_id`, `title`,`type`,`content`,`file`,`u_id`) 
			VALUES ('$resource_id', '$title', '$type','$content','$file','$alumni_id')";

    // Execute the query
    $result=mysqli_query($db, $sql) or die(mysqli_error ($db));
            if($result==1)
            {
                    header("location:alumni_resource.php");
					
				
			}
        }
?>