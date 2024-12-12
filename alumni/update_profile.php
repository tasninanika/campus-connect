<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $alumni_id = $_SESSION['alumni_id'];

    // Get POST data and sanitize
    $first_Name = mysqli_real_escape_string($db, $_POST['first_Name']);
    $last_Name = mysqli_real_escape_string($db, $_POST['last_Name']);
    $class_id = mysqli_real_escape_string($db, $_POST['class_id']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $batch = mysqli_real_escape_string($db, $_POST['batch']);
    $passing_year = mysqli_real_escape_string($db, $_POST['passing_year']);
    $contact_number = mysqli_real_escape_string($db, $_POST['contact_number']);
    $full_address = mysqli_real_escape_string($db, $_POST['full_address']);
    $city = mysqli_real_escape_string($db, $_POST['city']);

    // Create SQL query to update user information
    $sql = "UPDATE user
            JOIN alumni ON user.u_id = alumni.alumni_id
            SET user.first_Name = '$first_Name',
                user.last_Name = '$last_Name',
                alumni.class_id = '$class_id',
                alumni.department = '$department',
                alumni.batch = '$batch',
                alumni.passing_year = '$passing_year',
                alumni.contact_number = '$contact_number',
                alumni.full_address = '$full_address',
                alumni.city = '$city'
            WHERE user.u_id = '$alumni_id'";

    // Execute the query
    $result=mysqli_query($db, $sql) or die(mysqli_error ($db));
    if($result==1)
    {
            header("location:alumni_profile.php");
            
        
    }
}
?>