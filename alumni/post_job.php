<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $alumni_id = $_SESSION['alumni_id'];
    

    // Get POST data and sanitize
    $job_id = uniqid('Job');
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $category = mysqli_real_escape_string($db, $_POST['category']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $experience = mysqli_real_escape_string($db, $_POST['experience']);
    $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
    $salary = mysqli_real_escape_string($db, $_POST['salary']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $logo = mysqli_real_escape_string($db, $_POST['logo']);
    $apply_info = mysqli_real_escape_string($db, $_POST['apply_info']);
    $com_description = mysqli_real_escape_string($db, $_POST['com_description']);

    // Create SQL query to post job information
    $sql = "INSERT INTO `job` (`job_id`, `title`,`type`, `category`, `department`, `company_name`, `logo`, `experience`, `qualification`, `location`, `salary`, `description`, `com_description`, `apply_info`, `u_id`) 
			VALUES ('$job_id', '$title', '$type', '$category', '$department', '$company_name', '$logo', '$experience', '$qualification', '$location', '$salary', '$description', '$com_description', '$apply_info', '$alumni_id')";

    // Execute the query
    $result=mysqli_query($db, $sql) or die(mysqli_error ($db));
            if($result==1)
            {
                    header("location:alumni_job.php");
					
				
			}
        }
?>