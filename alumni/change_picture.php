<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumni_id = $_SESSION['alumni_id'];
    $newName = "";

    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        // Directories for images
        $base_dir = "../upload/";
        $image_dir = $base_dir . "images/";

        // Ensure the directory exists and is writable
        if (!is_dir($image_dir)) {
            mkdir($image_dir, 0755, true);
        }

        // Get file info
        $originalName = basename($_FILES["fileToUpload"]["name"]);
        $newName = date('YmdHis_') . $originalName;  // Create a unique file name
        $fileType = strtolower(pathinfo($newName, PATHINFO_EXTENSION));

        // Set target directory based on file type (images only in this case)
        $allowedImageTypes = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($fileType, $allowedImageTypes)) {
            echo "Error: Invalid file type. Only jpg, jpeg, png, and gif are allowed.";
            exit;
        }

        // File size check (limit to 20 MB)
        if ($_FILES["fileToUpload"]["size"] > 20000000) { // 20 MB limit
            echo "Error: File size exceeds 20 MB.";
            exit;
        }

        // Set target file path
        $target_file = $image_dir . $newName;

        // Move uploaded file to the target directory
        if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Error: Unable to save file.";
            exit;
        }
    } else {
        $newName = $_POST['image'] ?? '';
    }

    // If the file name is empty, show an error
    if (empty($newName)) {
        echo "Error: File name is empty.";
        exit;
    }    

    // Insert data into the database
    $sql = "UPDATE `alumni` (`id_photo`) 
            VALUES ('$newName')";

    if (mysqli_query($db, $sql)) {
        header("location:alumni_profile.php");
    } else {
        echo "Database Error: " . mysqli_error($db);
    }
}
?>
