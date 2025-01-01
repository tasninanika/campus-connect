<?php
include('./db_con/dbCon.php');
// Fetch the most recent event
$sql = "SELECT * FROM event ORDER BY date ASC LIMIT 1";
$result = $db->query($sql);
$event = $result->fetch_assoc();

// Pass event data to the frontend
echo json_encode($event);
