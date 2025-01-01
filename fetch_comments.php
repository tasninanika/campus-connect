<?php
include('./db_con/dbCon.php');

// Check if the blog ID is provided
if (!isset($blog_id)) {
    die('Error: Blog ID is required.');
}

// Start the session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    die('You must be logged in.');
}

$email = $_SESSION['email'];
$user_query = "SELECT u_id, role FROM user WHERE email = '$email'";
$user_result = mysqli_query($db, $user_query);

if ($user_result && mysqli_num_rows($user_result) > 0) {
    $user = mysqli_fetch_assoc($user_result);
    $logged_in_user_id = $user['u_id'];
    $user_role = $user['role'];
} else {
    die('Error: User not found.');
}

// Fetch all comments for the specific blog ID
$query = "
    SELECT 
        bc.comment_id, 
        bc.blog_id, 
        bc.comment, 
        bc.created_at, 
        u.first_name, 
        u.last_name, 
        u.u_id, 
        IF(u.role = 'alumni', alumni.id_photo, student.id_photo) AS id_photo
    FROM 
        blog_comments bc
    INNER JOIN 
        user u 
    ON 
        bc.u_id = u.u_id
    LEFT JOIN 
        alumni 
    ON 
        u.u_id = alumni.alumni_id
    LEFT JOIN 
        student 
    ON 
        u.u_id = student.student_id
    WHERE 
        bc.blog_id = '$blog_id'
    ORDER BY 
        bc.created_at DESC";

$result = mysqli_query($db, $query);

$comments = [];
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $comments[] = $row;
    }
}
?>

<!-- Display comments -->
<div>
    <?php foreach ($comments as $comment): ?>
        <div class="p-4 border-2 border-gray-100 rounded-md mb-4">
            <div class="flex justify-between">
                <div class="flex items-center gap-3">
                    <div>
                        <img src="./images/upload/<?php echo htmlspecialchars($comment['id_photo'] ?: 'default.png'); ?>"
                            alt="Profile Picture"
                            class="w-11 h-11 rounded-full">
                    </div>
                    <div class="leading-4">
                        <p class="text-black"><?php echo htmlspecialchars($comment['first_name'] . ' ' . $comment['last_name']); ?></p>
                        <small class="text-gray-400">
                            <?php echo date('F j, Y', strtotime($comment['created_at'])); ?>
                        </small>
                    </div>
                </div>
                <?php if ($comment['u_id'] == $logged_in_user_id): ?>
                    <div class="flex items-center gap-2">
                        <p class="text-sm cursor-pointer mr-3" onclick="openEditModal('<?php echo $comment['comment_id']; ?>')"><i class="fa-regular fa-pen-to-square"></i> Edit</p>
                        <p class="text-sm cursor-pointer" onclick="deleteComment('<?php echo $comment['comment_id']; ?>')"><i class="fa-solid fa-trash"></i> Delete</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="mt-3" data-comment-id="<?php echo $comment['comment_id']; ?>">
                <p class="text-black text-sm"><?php echo htmlspecialchars($comment['comment']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Modal for Editing Comments -->
<dialog id="dynamicModal" class="modal">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Edit Comment</h3>
        <form id="editCommentForm" onsubmit="submitEditComment(event)">
            <!-- Hidden field for storing comment_id -->
            <input type="hidden" id="modalCommentId" name="comment_id" />
            <!-- Textarea for editing the comment -->
            <textarea
                id="modalCommentText"
                name="comment"
                class="textarea textarea-bordered w-full mt-4"
                rows="4"></textarea>
            <div class="modal-action">
                <button type="submit" class="btn bg">Save</button>
                <button type="button" class="btn" onclick="closeModal()">Cancel</button>
            </div>
        </form>
    </div>
</dialog>

<!-- Styling to Hide Modal When Not Open -->
<style>
    .modal:not([open]) {
        display: none;
    }
</style>

<!-- JavaScript for Modal Functionality -->
<script>
    function openEditModal(commentId) {
        // Find the comment text using the comment ID
        const commentText = document.querySelector(`[data-comment-id="${commentId}"]`).textContent;

        // Populate the modal fields
        document.getElementById('modalCommentId').value = commentId;
        document.getElementById('modalCommentText').value = commentText.trim(); // Remove extra spaces

        // Show the modal
        const modal = document.getElementById('dynamicModal');
        if (modal) {
            modal.showModal(); // Properly opens the modal
        }
    }

    function closeModal() {
        const modal = document.getElementById('dynamicModal');
        if (modal) {
            modal.close(); // Properly closes the modal
        }
    }

    function submitEditComment(event) {
        event.preventDefault();

        const commentId = document.getElementById('modalCommentId').value;
        const commentText = document.getElementById('modalCommentText').value;

        fetch('edit_comment.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    comment_id: commentId,
                    comment: commentText
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Comment updated successfully!');
                    location.reload(); // Refresh to update the comment list
                } else {
                    alert('Error updating comment.');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    function deleteComment(commentId) {
        if (confirm('Are you sure you want to delete this comment?')) {
            fetch('delete_comment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        comment_id: commentId
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Comment deleted successfully!');
                        location.reload(); // Refresh to update the comment list
                    } else {
                        alert('Error deleting comment.');
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    }
</script>