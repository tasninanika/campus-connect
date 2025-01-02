<?php
    include("../db_con/dbCon.php");
    if (isset($_GET['unblock_id'])) {
        $blog_id = $_GET['unblock_id'];

        // Fetch the resource details for logging or display purposes
        $findSql = "SELECT * FROM blog WHERE blog_id='$blog_id'";
        $resultData = $db->query($findSql);

        foreach ($resultData as $item) {
            $title = $item['title'];
            $type = $item['type'];
            $description = $item['description'];
            $u_id = $item['u_id'];
            $status = $item['status'];
        }

        // Update the status of the resource to 'Active'
        $sql = "UPDATE `blog` SET `status`='Approve' WHERE blog_id='$blog_id'";
        $db->query($sql);

        // Redirect to the resources management page
        header("Location: pending_blogs.php");
    }
?>
