<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumni_id = $_SESSION['alumni_id'];
    $newName = "";

    // Check if a file is uploaded and no upload errors
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {

        // Define paths for images and documents
        $base_dir = "../upload/";
        $image_dir = $base_dir . "images/";
        $document_dir = $base_dir . "documents/";

        // Ensure the image directory exists
        if (!is_dir($image_dir)) {
            mkdir($image_dir, 0755, true);
        }

        // Get the original file name and assign a unique name based on the current time
        $originalName = basename($_FILES["fileToUpload"]["name"]);
        $newName = date('YmdHis_') . $originalName;
        $fileType = strtolower(pathinfo($newName, PATHINFO_EXTENSION));

        // Debug: Output file type for troubleshooting
        echo "File type: " . $fileType . "<br>";

        // Validate file types (image formats allowed)
        $allowedImageTypes = ["jpg", "jpeg", "png", "gif"];
        $allowedDocumentTypes = ["pdf", "docx", "xlsx"];
        $allowedFileTypes = array_merge($allowedImageTypes, $allowedDocumentTypes);

        if (!in_array($fileType, $allowedImageTypes)) {
            echo "Error: Invalid image file type. Allowed types are: jpg, jpeg, png, gif.";
            exit;
        }

        // Check file size (limit 20MB)
        if ($_FILES["fileToUpload"]["size"] > 20000000) {
            echo "Error: File size exceeds 20 MB.";
            exit;
        }

        // Move the uploaded file to the appropriate directory
        $target_file = $image_dir . $newName;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Successfully uploaded the image
            echo "File uploaded successfully!<br>";
        } else {
            echo "Error: Unable to upload the file. Please check directory permissions.";
            exit;
        }
    } else {
        // If no image is uploaded, fall back to the existing image name in the POST data
        $newName = $_POST['image'] ?? '';
    }

    // Ensure that we have a valid filename
    if (empty($newName)) {
        echo "Error: File name is empty.";
        exit;
    }

    // Prepare other data for database insertion
    $blog_id = uniqid('Blog');
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $description = mysqli_real_escape_string($db, $_POST['description']);

    // Insert data into the database
    $sql = "INSERT INTO `blog` (`blog_id`, `title`, `type`, `description`, `blog_picture`, `u_id`) 
            VALUES ('$blog_id', '$title', '$type', '$description', '$newName', '$alumni_id')";

    if (mysqli_query($db, $sql)) {
        header("location:alumni_blog.php");
    } else {
        echo "Database Error: " . mysqli_error($db);
    }
}
?>
