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
        background: url("./images/background-video.gif");
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0.547);
        background-blend-mode: multiply;
    }

    .job-filter {
        background: url('https://i.pinimg.com/originals/87/91/00/8791009aad70b34896002122588a1876.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-color: rgba(0, 0, 0, 0.547);
        background-blend-mode: multiply;
        min-height: 150px;
    }

    .fade-in {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .no-jobs-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    </style>
    <link rel="stylesheet" href="./CSS/common-styles.css">
</head>

<body>
    <!-- Hero Section -->
    <section class="w-[95%] mx-auto my-11">
        <div class="job-bg h-96 rounded-lg flex justify-center items-center">
            <div class="text-center text-white">
                <h1 class="text-white">Jobs</h1>
                <h3>Find your dream Job or Internship.</h3>
            </div>
        </div>
    </section>

    <!-- Job Search Section -->
    <?php
        $sqlCount = "SELECT COUNT(*) AS total_rows FROM job";
        $resultCount = mysqli_query($db, $sqlCount);

        if ($resultCount) {
            $rowCount = mysqli_fetch_assoc($resultCount);
            $totalRows = $rowCount['total_rows'];
        } else {
            $totalRows = 0;
        }

        $conditions = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['department'])) {
                $department = mysqli_real_escape_string($db, $_POST['department']);
                $conditions[] = "department = '$department'";
            }
            if (!empty($_POST['location'])) {
                $location = mysqli_real_escape_string($db, $_POST['location']);
                $conditions[] = "location = '$location'";
            }
            if (!empty($_POST['type'])) {
                $type = mysqli_real_escape_string($db, $_POST['type']);
                $conditions[] = "type = '$type'";
            }
        }

        $sql = "SELECT * FROM job WHERE status = 'Approve'";
        if (count($conditions) > 0) {
            $sql .= " AND " . implode(' AND ', $conditions);
        }
        $query = mysqli_query($db, $sql);
    ?>

    <div class="my-11">
        <h2 class="text-center">There Are <span class="text-[#797DFC]"><?php echo $totalRows ?></span> Postings Here For you!</h2>
        <p class="text-center">Find Jobs, Employment & Career Opportunities</p>
    </div>

    <!-- Job Filter Form -->
    <div class="w-[95%] bg-green-700 mx-auto job-filter flex justify-center items-center rounded-lg">
        <form method="POST" class="flex lg:flex-row flex-col items-center gap-4 w-full max-w-5xl mx-auto p-4">
            <select name="department" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Select Department</option>
                <option>CSE</option>
                <option>EEE</option>
                <option>CEN</option>
                <option>ME</option>
            </select>
            <select name="location" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Select Location</option>
                <option>Chattogram</option>
                <option>Dhaka</option>
                <option>Cumilla</option>
                <option>Sylhet</option>
                <option>Rajshahi</option>
            </select>
            <select name="type" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Select Type</option>
                <option>Full-Time</option>
                <option>Full-Time(Remote)</option>
                <option>Part-Time</option>
                <option>Part-Time(Remote)</option>
                <option>Internship</option>
            </select>
            <button type="submit" class="px-6 py-3 rounded-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 max-w-xs w-full">
                Search
            </button>
        </form>
    </div>

    <!-- Job Posts -->
    <section class="w-[95%] mx-auto my-16">
        <div class="mt-8 mb-11 text-center">
            <h1>Featured Jobs</h1>
            <p>Know your worth and find the job that qualify your life</p>
        </div>
        <div id="job-container" class="grid grid-cols-1 lg:grid-cols-2 gap-8 fade-in ms-auto">
            <?php 
            if(mysqli_num_rows($query) > 0) {
                while ($rows = mysqli_fetch_assoc($query)) {
                    $job_id = $rows['job_id'];
                    $job_title = $rows['title'];
                    $company = $rows['company_name'];
                    $experience = $rows['experience'];
                    $sallary = $rows['salary'];
                    $location = $rows['location'];
                    $posted_date = $rows['created_at'];

                    $postedDate = new DateTime($posted_date);
                    $currentDate = new DateTime();
                    $interval = $postedDate->diff($currentDate);
                    $daysAgo = $interval->days;

                    $displayDate = $daysAgo > 30 ? "30+ days ago" : ($daysAgo === 1 ? "1 day ago" : "$daysAgo days ago");
            ?>
            <div class="flex flex-col gap-8 px-5 py-4 border border-1 border-[#797DFC] shadow-lg rounded-lg">
                <div>
                    <h3><?php echo $job_title; ?></h3>
                    <p><?php echo $company; ?></p>
                </div>
                <div class="flex items-center gap-16">
                    <div class="flex items-center gap-x-2">
                        <img src="./images/icons/job-icon.png" alt="job-icon" class="w-5">
                        <p><span><?php echo $experience; ?></span></p>
                    </div>
                    <div class="flex items-center gap-x-2">
                        <img src="./images/icons/salary-icon.png" alt="salary-icon" class="w-5">
                        <p><span>BDT. <?php echo $sallary; ?></span> TK.</p>
                    </div>
                </div>
                <div class="flex items-center gap-x-2">
                    <img src="./images/icons/location-icon.png" alt="location-icon" class="w-5">
                    <p><span><?php echo $location; ?></span></p>
                </div>
                <hr class="h-[0.5px] bg-gray-400 border-none">
                <div class="flex justify-between items-center">
                    <p>Posted: <?php echo $displayDate; ?></p>
                    <button class="px-5 py-1 rounded-full">
                        <?php echo '<a href="view-job.php?job_id='.$rows['job_id'].'">Apply</a>'; ?>
                    </button>
                </div>
            </div>
            <?php
                }
            } else {
            ?>
            <div class="no-jobs-container">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/no-data-found-illustration-download-in-svg-png-gif-file-formats--office-computer-digital-work-business-pack-illustrations-7265556.png" alt="No Data Found" class="w-40">
                <h3>No jobs found matching your criteria</h3>
                <button onclick="history.back()" class="mt-4 px-6 py-2 bg-[#797DFC] text-white rounded-full">Go Back</button>
            </div>
            <?php
            }
            ?>
        </div>
    </section>
    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            setTimeout(() => {
                document.querySelector("#job-container").scrollIntoView({ behavior: "smooth" });
            }, 100); // Delay for smooth rendering
        });
    </script>
</body>

</html>
