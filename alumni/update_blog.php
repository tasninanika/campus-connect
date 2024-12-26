<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user ID from session
    $alumni_id = $_SESSION['alumni_id'];
    $blog_id = mysqli_real_escape_string($db, $_POST['blog_id']);

    // Get POST data and sanitize
    $blog_title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    // Create SQL query to update job information
    $sql = "UPDATE blog
            SET title = '$blog_title',
                type = '$type',
                description = '$description'
             WHERE blog_id = '$blog_id' AND u_id = '$alumni_id'";

    // Execute the query
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));

    if ($result) {
        // Redirect on success
        header("Location: posted_blog.php");
        exit;
    } else {
        // Display error message
        echo "Error updating blog information.";
    }
}
?>
