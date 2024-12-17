<?php
session_start();
include("../db_con/dbCon.php");
// Update unread announcements to read (read_state = TRUE)
$sql = "UPDATE announcement SET read_state = TRUE WHERE read_state = FALSE";
mysqli_query($db, $sql);

echo "Notifications marked as read!";
?>
