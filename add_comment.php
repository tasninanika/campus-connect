<?php
session_start();
include('./db_con/dbCon.php'); // Replace with your database connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate user login
    if (!isset($_SESSION['email'])) {
        die('You must be logged in to comment.');
    }

    // Retrieve email from the session
    $email = $_SESSION['email'];

    // Fetch the u_id based on the email
    $user_query = "SELECT u_id FROM user WHERE email = '$email'";
    $user_result = mysqli_query($db, $user_query);
    if ($user_result && mysqli_num_rows($user_result) > 0) {
        $user = mysqli_fetch_assoc($user_result);
        $u_id = $user['u_id'];
    } else {
        die('Error: User not found.');
    }
    $comment_id = uniqid('Comment');
    // Retrieve form data
    $blog_id = isset($_POST['blog_id']) ? mysqli_real_escape_string($db, $_POST['blog_id']) : null;
    $comment = isset($_POST['comment']) ? mysqli_real_escape_string($db, $_POST['comment']) : null;

    // Validate form input
    if (empty($blog_id)) {
        die('Error: Blog ID is missing.');
    }
    if (empty($comment)) {
        die('Comment cannot be empty.');
    }

    // Insert the comment into the database
    $sql = "INSERT INTO blog_comments (comment_id, blog_id, comment, u_id, created_at) VALUES ('$comment_id','$blog_id', '$comment', '$u_id', NOW())";

    if (mysqli_query($db, $sql)) {
        // Redirect back to the blog page with a success message
        header("Location: view-blog.php?blog_id=$blog_id&success=Comment added successfully!");
        exit();
    } else {
        die('Error: ' . mysqli_error($db));
    }
} else {
    die('Invalid request.');
}
