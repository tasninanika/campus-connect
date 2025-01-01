<?php
include('./db_con/dbCon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $comment_id = $data['comment_id'];

    // Delete the comment
    $query = "DELETE FROM blog_comments WHERE comment_id = '$comment_id'";
    if (mysqli_query($db, $query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($db)]);
    }
}
