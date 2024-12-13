<?php
	include_once 'db_con/dbCon.php';
	
	$okFlag = TRUE;
	if($okFlag){
		
		if(isset($_FILES["fileToUpload"]["name"]) && $_FILES["fileToUpload"]["name"] != ''){
			//echo 123;exit;
			$target_dir = "./upload/images/";
			$newName = date('YmdHis_');
			$newName .= basename($_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir . $newName;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				$uploadOk = 1;
				} else {
				$uploadOk = 0;
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 5000000) {
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "JPG" &&$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				$uploadOk = 0;
			}
			
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$checkFlag = FALSE;
				// if everything is ok, try to upload file
				} else {
				if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					} else {
					$checkFlag = FALSE;
				}
			}
			//echo $newName;exit;
			}else{
			$newName = $_POST['image'];
			//echo $newName;exit;
		}
		
		$u_id = uniqid('Alumni');
		$first_Name = $_REQUEST['first_Name'];
		$last_Name = $_REQUEST['last_Name'];
		$email = $_REQUEST['email'];
		$class_id = $_REQUEST['class_id'];
		$batch = $_REQUEST['batch'];
		$passing_year = $_REQUEST['passing_year'];
        $dbtact_number = $_REQUEST['contact_number'];
		$full_address = $_REQUEST['full_address'];
		$city = $_REQUEST['city'];
		$department = $_REQUEST['department'];
        $password = $_REQUEST['user_password'];
		
		
		//Check duplicate value
        $duplicate=mysqli_query($db,"select * from user where email='$email'");
        if (mysqli_num_rows($duplicate)>0)
        {
			echo "<script type= 'text/javascript'>MyCheckFn();</script>";
			//echo "Duplicate";
		}
        else
        {
            // sql query for inserting data into database
            $sql = "INSERT INTO `user` (`u_id`,`first_Name`, `last_Name`, `email`, `password`, `status`, `role`) 
			VALUES ('$u_id', '$first_Name', '$last_Name', '$email ', '$password', 'Pending', 'Alumni')";
          //echo $sql;exit;
		   $result=mysqli_query($db, $sql) or die(mysqli_error ($db));
            if($result==1)
            {
                $sql2= "INSERT INTO `alumni` (`alumni_id`, `class_id` , `batch`, `passing_year`,`contact_number`, `full_address`, `city`, `department`, `id_photo`) 
				VALUES ('$u_id', '$class_id', '$batch', '$passing_year', '$dbtact_number', '$full_address', '$city', '$department', '$newName')";
				
                $result2=mysqli_query($db, $sql2) or die(mysqli_error ($db));
                if ($result2==1)
                {
                    header("location:login.php");
					
				}
			}
		}
	}
?>