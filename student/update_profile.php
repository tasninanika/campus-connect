<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $student_id = $_SESSION['student_id'];

    // Get POST data and sanitize
    $first_Name = mysqli_real_escape_string($db, $_POST['first_Name']);
    $last_Name = mysqli_real_escape_string($db, $_POST['last_Name']);
    $class_id = mysqli_real_escape_string($db, $_POST['class_id']);
    $department = mysqli_real_escape_string($db, $_POST['department']);
    $batch = mysqli_real_escape_string($db, $_POST['batch']);
    $contact_number = mysqli_real_escape_string($db, $_POST['contact_number']);
    $full_address = mysqli_real_escape_string($db, $_POST['full_address']);
    $city = mysqli_real_escape_string($db, $_POST['city']);

    // Create SQL query to update user information
    $sql = "UPDATE user
            JOIN student ON user.u_id = student.student_id
            SET user.first_Name = '$first_Name',
                user.last_Name = '$last_Name',
                student.class_id = '$class_id',
                student.department = '$department',
                student.batch = '$batch',
                student.contact_number = '$contact_number',
                student.full_address = '$full_address',
                student.city = '$city'
            WHERE user.u_id = '$student_id'";

    // Execute the query
    $result=mysqli_query($db, $sql) or die(mysqli_error ($db));
    if($result==1)
    {
            header("location:student_profile.php");
            
        
    }
}
?>