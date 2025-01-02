<?php
    include("../db_con/dbCon.php");
    if (isset($_GET['unblock_id'])) {
        $job_id = $_GET['unblock_id'];

        // Fetch the resource details for logging or display purposes
        $findSql = "SELECT * FROM job WHERE job_id='$job_id'";
        $resultData = $db->query($findSql);

        foreach ($resultData as $item) {
            $title = $item['title'];
            $company_name = $item['company_name'];
            $experience = $item['experience'];
            $description = $item['description'];
            $location = $item['location'];
            $u_id = $item['u_id'];
            $status = $item['status'];
        }

        // Update the status of the resource to 'Active'
        $sql = "UPDATE `job` SET `status`='Approve' WHERE job_id='$job_id'";
        $db->query($sql);

        // Redirect to the resources management page
        header("Location: pending_job.php");
    }
?>
