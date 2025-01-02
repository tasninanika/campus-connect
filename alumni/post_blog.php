<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumni_id = $_SESSION['alumni_id'];
    

    // Prepare other data for database insertion
    $blog_id = uniqid('Blog');
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    // Insert data into the database
    $sql = "INSERT INTO `blog` (`blog_id`, `title`, `type`, `description`, `u_id`, `status`) 
            VALUES ('$blog_id', '$title', '$type', '$description', '$alumni_id', 'Pending')";

    if (mysqli_query($db, $sql)) {
        header("location:alumni_blog.php");
    } else {
        echo "Database Error: " . mysqli_error($db);
    }
}
?>
