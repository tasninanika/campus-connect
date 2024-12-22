<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $job_id = $_SESSION['job_id'];

    // Get POST data and sanitize
    $job_title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $category = mysqli_real_escape_string($db, $_POST['category']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $company_name = mysqli_real_escape_string($db, $_POST['company_name']);
    $experience = mysqli_real_escape_string($db, $_POST['experience']);
    $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $salary = mysqli_real_escape_string($db, $_POST['salary']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $com_description = mysqli_real_escape_string($db, $_POST['com_description']);
    $apply_info = mysqli_real_escape_string($db, $_POST['apply_info']);

    // Create SQL query to update user information
    $sql = "UPDATE job
            ON job.u_id = alumni.alumni_id
            SET job.title = '$job_title',
                job.type = '$type',
                job.category = '$category',
                job.department = '$department',
                job.company_name = '$company_name',
                job.experience = '$experience',
                job.qualification = '$qualification',
                job.location = '$location',
                job.salary = '$salary'
                job.description = '$description'
                job.com_description = '$com_description'
                job.apply_info = '$apply_info'
            WHERE job.u_id = '$u_id'";

    // Execute the query
    $result=mysqli_query($db, $sql) or die(mysqli_error ($db));
    if($result==1)
    {
            header("location:alumni_job.php");
            
        
    }
}
?>