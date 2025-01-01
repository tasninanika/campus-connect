<?php
include('./db_con/dbCon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment_id = $_POST['comment_id'];
    $comment = mysqli_real_escape_string($db, $_POST['comment']);

    // Update the comment
    $query = "UPDATE blog_comments SET comment = '$comment' WHERE comment_id = '$comment_id'";
    if (mysqli_query($db, $query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => mysqli_error($db)]);
    }
}
