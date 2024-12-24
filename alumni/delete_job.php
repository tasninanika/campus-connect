<?php
session_start();
include("../db_con/dbCon.php");

// Check if job_id is provided in the URL
if (isset($_GET['job_id'])) {
    $job_id = $_GET['job_id'];

    // Fetch the logo image name from the database to delete the file later
    $sql = "SELECT logo FROM job WHERE job_id = '$job_id'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $logo = $row['logo']; // Get the logo file name

        // Delete the job post from the database
        $delete_sql = "DELETE FROM job WHERE job_id = '$job_id'";
        if (mysqli_query($db, $delete_sql)) {
            // Check if the image exists and delete the file
            $image_path = "../upload/images/" . $logo;
            if (file_exists($image_path)) {
                unlink($image_path); // Delete the image from the server
            }

            // Redirect to the job listing page
            header("Location: alumni_job.php?success=Job deleted successfully");
            exit();
        } else {
            echo "Error deleting job: " . mysqli_error($db);
        }
    } else {
        echo "Job not found!";
    }
} else {
    echo "Invalid request!";
}
?>
