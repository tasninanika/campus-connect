<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $alumni_id = $_SESSION['alumni_id'];
    $job_id = mysqli_real_escape_string($db, $_POST['job_id']);

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

    // Create SQL query to update job information
    $sql = "UPDATE job
            SET title = '$job_title',
                type = '$type',
                category = '$category',
                department = '$department',
                company_name = '$company_name',
                experience = '$experience',
                qualification = '$qualification',
                location = '$location',
                salary = '$salary',
                description = '$description',
                com_description = '$com_description',
                apply_info = '$apply_info'
             WHERE job_id = '$job_id' AND u_id = '$alumni_id'";

    // Execute the query
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));

    if ($result) {
        // Redirect on success
        header("Location: posted_job.php");
        exit;
    } else {
        // Display error message
        echo "Error updating job information.";
    }
}
?>
