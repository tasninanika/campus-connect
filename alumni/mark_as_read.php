<?php
session_start();
include("../db_con/dbCon.php");
// Update announcements as read
$sql = "UPDATE announcement SET read_state = TRUE WHERE read_state = FALSE";
mysqli_query($db, $sql);

echo json_encode(['status' => 'success']);
exit();
?>