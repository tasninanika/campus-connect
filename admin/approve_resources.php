<?php
    include("../db_con/dbCon.php");
    if (isset($_GET['unblock_id'])) {
        $material_id = $_GET['unblock_id'];

        // Fetch the resource details for logging or display purposes
        $findSql = "SELECT * FROM resources WHERE material_id='$material_id'";
        $resultData = $db->query($findSql);

        foreach ($resultData as $item) {
            $title = $item['title'];
            $type = $item['type'];
            $content = $item['content'];
            $file = $item['file'];
            $u_id = $item['u_id'];
            $status = $item['status'];
        }

        // Update the status of the resource to 'Active'
        $sql = "UPDATE `resources` SET `status`='Approve' WHERE material_id='$material_id'";
        $db->query($sql);

        // Redirect to the resources management page
        header("Location: pending_resources.php");
    }
?>
