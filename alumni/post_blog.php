<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $alumni_id = $_SESSION['alumni_id'];
    
    

    // Get POST data and sanitize
    $blog_id = uniqid('Blog');
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $blog_picture = mysqli_real_escape_string($db, $_POST['blog_picture']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    // Create SQL query to post job information
    $sql = "INSERT INTO `blog` (`blog_id`, `title`,`type`,`blog_picture`,`description`,`u_id`) 
			VALUES ('$blog_id', '$title', '$type','$blog_picture','$description','$alumni_id')";

    // Execute the query
    $result=mysqli_query($db, $sql) or die(mysqli_error ($db));
            if($result==1)
            {
                    header("location:alumni_blog.php");
					
				
			}
        }
?>