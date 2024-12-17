<?php
session_start();
include("../db_con/dbCon.php");

// Count unread announcements
$sql = "SELECT COUNT(*) AS unread_count FROM announcement WHERE read_state = FALSE";
$query = mysqli_query($db, $sql);

$unread_count = 0;

if ($query) {
    $result = mysqli_fetch_assoc($query);
    $unread_count = $result['unread_count'];
}

header('Content-Type: application/json');
echo json_encode(['unread_count' => $unread_count]);
exit();
?>
