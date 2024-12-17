<?php
if (isset($_GET['file'])) {
    // If it's a document download request
    $file = $_GET['file'];

    // Set the file path for the document
    $file_path = "../upload/documents/" . basename($file);

    // Check if the file exists
    if (file_exists($file_path)) {
        // Set headers for file download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file_path));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));

        // Read and output the file
        readfile($file_path);
        exit;
    } else {
        echo "File not found.";
    }
} elseif (isset($_GET['image'])) {
    // If it's an image download request
    $image = $_GET['image'];

    // Set the image path
    $image_path = "../upload/images/" . basename($image);

    // Check if the image exists
    if (file_exists($image_path)) {
        // Set headers for image download
        header('Content-Description: File Transfer');
        header('Content-Type: image/jpeg'); // Change this to the appropriate MIME type for the image (e.g., image/png, image/jpg, etc.)
        header('Content-Disposition: attachment; filename=' . basename($image_path));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($image_path));

        // Read and output the image
        readfile($image_path);
        exit;
    } else {
        echo "Image not found.";
    }
}
?>
