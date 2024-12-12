<?php
    include('db_con/dbCon.php');
    include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Jobs</title>
    <style>
    .job-bg {
        background: url("https://static.wixstatic.com/media/fe4a5d_b4d288522a074d7c9a1af1f7b4da4d32~mv2.gif/v1/fill/w_768,h_432,al_c/fe4a5d_b4d288522a074d7c9a1af1f7b4da4d32~mv2.gif");
        background-size: cover;
        background-postion: center center;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0.547);
        background-blend-mode: multiply;
    }
    </style>
    <link rel="stylesheet" href="./CSS/common-styles.css">
</head>

<body>
    <!-- Hero Section -->
    <section class="w-[95%] mx-auto my-11 ">
        <div class="job-bg h-96 rounded-lg  relative">
            <nav class="absolute top-[50%] left-[50%] translate-x-[-50%]">
                <ol class="flex justify-items-center items-center gap-2">
                    <li>
                        <a class="font-medium text-2xl text-white" href="index.php">Home /</a>
                    </li>
                    <li class="text-2xl text-white">Jobs</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Job Search Section -->
    <div class="flex flex-col sm:flex-row items-center gap-4 w-full max-w-3xl mx-auto p-4">
        <!-- Input Field 1 with Job Name Icon -->
        <div class="relative flex-1">
            <span class="absolute inset-y-0 left-3 flex items-center text-gray-500">
                <!-- Job Name Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 13V6a1 1 0 011-1h10a1 1 0 011 1v7M9 17h6m-3-3v6" />
                </svg>
            </span>
            <input type="text" placeholder="Job Name"
                class="w-full pl-10 pr-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#797DFC]" />
        </div>

        <!-- Input Field 2 with Icon at the End -->
        <div class="relative flex-1">
            <input type="text" placeholder="Enter details"
                class="w-full pl-4 pr-10 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#797DFC]" />
            <span class="absolute inset-y-0 right-3 flex items-center text-gray-500">
                <!-- Icon for Input Field 2 -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </span>
        </div>

        <!-- Search Button -->
        <button class="px-6 py-2 rounded-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            Search
        </button>
    </div>

    <!-- Job Posts -->
    <section class="w-[95%] mx-auto my-5">
        <div class="grid grid-cols-3 gap-5">
            <?php 
    $sql = "SELECT * FROM job";
    $query = mysqli_query($db, $sql);

    if(mysqli_num_rows($query) > 0) {
      while ($rows = mysqli_fetch_assoc($query)) {
        $job_title = $rows['title'];
        $company = $rows['company_name'];
        $experience = $rows['experience'];
        $sallary = $rows['sallary'];
        $location = $rows['location'];
        $posted_date = $rows['created_at'];

        // Calculate days ago
        $postedDate = new DateTime($posted_date);
        $currentDate = new DateTime();
        $interval = $postedDate->diff($currentDate);
        $daysAgo = $interval->days;

        if ($daysAgo > 30) {
            $displayDate = "30+ days ago";
        } elseif ($daysAgo === 1) {
            $displayDate = "1 day ago";
        } else {
            $displayDate = "$daysAgo days ago";
        }
        ?>
            <div
                class="flex flex-col gap-8 px-5 py-4 border border-1 border-[#797DFC] shadow-sm shadow-indigo-500/50 rounded-lg hover:skew-y-3 hover:ease-in-out hover:duration-300">
                <div>
                    <h3><?php echo $job_title; ?></h3>
                    <p><?php echo $company; ?></p>
                </div>
                <!-- <hr class="mx-auto w-[200px] h-[0.5px] bg-[#797DFC] border-none"> -->
                <div class="flex items-center gap-16">
                    <div class="flex items-center gap-x-2">
                        <img src="./images/icons/job-icon.png" alt="job-icon" class="w-5">
                        <p>
                            <span><?php echo $experience; ?></span>
                        </p>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <img src="./images/icons/salary-icon.png" alt="salary-icon" class="w-5">
                        <p>
                            <span>BDT. <?php echo $sallary; ?></span> TK.
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <img src="./images/icons/location-icon.png" alt="location-icon" class="w-5">
                    <p>
                        <span><?php echo $location; ?></span>
                    </p>
                </div>
                <hr class=" h-[0.5px] bg-gray-400 border-none">
                <div class="flex justify-between items-center">
                    <p>Posted: <?php echo $displayDate; ?></p>
                    <button class="px-5 py-1 rounded-full">Apply</button>
                </div>
            </div>
            <?php
      }
    }?>
        </div>
    </section>


</body>

</html>