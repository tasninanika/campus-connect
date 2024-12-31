<?php
session_start();
include("../db_con/dbCon.php");

// Check if material_id is passed in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $blog_id = $_GET['id']; // Use the blog_id as a string

    // Prepare the DELETE query
    $sql = "DELETE FROM blog WHERE blog_id = ?";

    // Initialize the prepared statement
    if ($stmt = mysqli_prepare($db, $sql)) {
        // Bind the blog_id as a string parameter
        mysqli_stmt_bind_param($stmt, "s", $blog_id);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to the blog list page with a success message
            header("Location: pending_blogs.php?msg=Blog deleted successfully");
            exit; // Ensure no further code executes after redirect
        } else {
            // Handle execution error
            echo "Error deleting blog: " . mysqli_error($db);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Handle preparation error
        echo "Error preparing statement: " . mysqli_error($db);
    }
} else {
    // Error message if job_id is not passed or invalid
    echo "Invalid or missing blog ID!";
}

// Close the database connection
mysqli_close($db);
?>
