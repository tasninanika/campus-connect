<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alumni_id = $_SESSION['alumni_id'];
    $newName = "";

    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        $base_dir = "../upload/";
        $image_dir = $base_dir . "images/";
        $document_dir = $base_dir . "documents/";

        if (!is_dir($image_dir)) mkdir($image_dir, 0755, true);
        if (!is_dir($document_dir)) mkdir($document_dir, 0755, true);

        $originalName = basename($_FILES["fileToUpload"]["name"]);
        $newName = date('YmdHis_') . $originalName;
        $fileType = strtolower(pathinfo($newName, PATHINFO_EXTENSION));

        $target_dir = in_array($fileType, ["jpg", "jpeg", "png", "gif"]) ? $image_dir : $document_dir;
        $target_file = $target_dir . $newName;

        $allowedImageTypes = ["jpg", "jpeg", "png", "gif"];
        $allowedDocumentTypes = ["pdf", "docx", "xlsx"];
        $allowedFileTypes = array_merge($allowedImageTypes, $allowedDocumentTypes);

        // Check file type and size
        if (!in_array($fileType, $allowedFileTypes)) {
            echo "Error: Invalid file type.";
            exit;
        }
        if ($_FILES["fileToUpload"]["size"] > 20000000) { // 20 MB limit
            echo "Error: File size exceeds 20 MB.";
            exit;
        }

        // Move uploaded file
        if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Error: Unable to save file.";
            exit;
        }
    } else {
        $newName = $_POST['image'] ?? '';
    }

    if (empty($newName)) {
        echo "Error: File name is empty.";
        exit;
    }

    $resource_id = uniqid('Resource');
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $content = mysqli_real_escape_string($db, $_POST['content']);

    $sql = "INSERT INTO `resources` (`material_id`, `title`, `type`, `content`, `file`, `u_id`, `status`) 
            VALUES ('$resource_id', '$title', '$type', '$content', '$newName', '$alumni_id', 'Pending')";

    if (mysqli_query($db, $sql)) {
        header("location:alumni_resources.php");
    } else {
        echo "Database Error: " . mysqli_error($db);
    }
}
?>
