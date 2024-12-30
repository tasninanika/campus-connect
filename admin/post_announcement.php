<?php
session_start();
include("../db_con/dbCon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $administrator_id = $_SESSION['administrator_id'];

    
    // Prepare other data for database insertion
    $announcement_id = uniqid('Announcement');
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['content']);

    // Insert data into the database
    $sql = "INSERT INTO `announcement` (`announcement_id`, `title`, `content`,`read_state`) 
            VALUES ('$announcement_id', '$title', '$description', '0')";

    if (mysqli_query($db, $sql)) {
        header("location:a_announcements.php");
    } else {
        echo "Database Error: " . mysqli_error($db);
    }
}
?>
