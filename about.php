<?php
session_start();
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent-Resident</title>
    <style>
        .about-bg {
            background: url("./images/about-banner.png");
            background-size: cover;
            background-position: center center center center;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.547);
            background-blend-mode: multiply;
        }

        .ad-bg {
            background: url("./images/about-banner.png");
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.547);
            background-blend-mode: multiply;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Hero Section -->
    <section class="w-[95%] mx-auto my-11 ">
        <div class="about-bg h-[500px] rounded-lg  relative">
            <nav class="absolute top-[50%] left-[50%] translate-x-[-50%]">
                <ol class="flex justify-items-center items-center gap-2">
                    <li>
                        <a class="font-medium text-2xl text-white" href="index.php">Home /</a>
                    </li>
                    <li class="text-2xl text-white">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Vision -->
    <section class="w-[95%] mx-auto my-11 p-8">
        <!-- Mission -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-20">
            <div>
                <img src="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/about-us-img1.jpg" alt=""
                    class="w-[600px] rounded-lg">
            </div>
            <div class="flex flex-col justify-between h-auto">
                <p class="text-5xl font-semibold">Vision</p>
                <p class="text-gray-500 leading-8">To build a vibrant and connected community where alumni and students can collaborate, share opportunities, and support each other. This platform will serve as a hub for networking, sharing knowledge, and staying informed about events, announcements, and career opportunities, creating lasting bonds and fostering mutual growth.</p>
            </div>
        </div>
    </section>
    <!-- Stats -->
    <section class="w-[95%] mx-auto my-20 bg-gray-200 p-2 lg:p-5 flex justify-center">
        <?php
        include('./db_con/dbCon.php');

        // Fetch blog count
        $blogCountQuery = "SELECT COUNT(*) as blog_count FROM blog";
        $blogCountResult = mysqli_query($db, $blogCountQuery);
        $blogCount = ($blogCountResult && mysqli_num_rows($blogCountResult) > 0) ? mysqli_fetch_assoc($blogCountResult)['blog_count'] : 0;

        // Fetch user count
        $userCountQuery = "SELECT COUNT(*) as user_count FROM user WHERE status='active'";
        $userCountResult = mysqli_query($db, $userCountQuery);
        $userCount = ($userCountResult && mysqli_num_rows($userCountResult) > 0) ? mysqli_fetch_assoc($userCountResult)['user_count'] : 0;

        // Fetch job count
        $jobCountQuery = "SELECT COUNT(*) as job_count FROM job";
        $jobCountResult = mysqli_query($db, $jobCountQuery);
        $jobCount = ($jobCountResult && mysqli_num_rows($jobCountResult) > 0) ? mysqli_fetch_assoc($jobCountResult)['job_count'] : 0;
        ?>

        <div class="stats shadow w-full lg:w-3/4 h-32">
            <div class="stat place-items-center">
                <div class="stat-title">Blogs</div>
                <div class="stat-value"><?php echo $blogCount; ?></div>
                <!-- <div class="stat-desc">From January 1st to August 1st</div> -->
            </div>

            <div class="stat place-items-center">
                <div class="stat-title">Users</div>
                <div class="stat-value text-secondary"><?php echo $userCount; ?></div>
            </div>

            <div class="stat place-items-center">
                <div class="stat-title">Jobs</div>
                <div class="stat-value"><?php echo $jobCount; ?></div>
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="w-[95%] mx-auto my-11 p-8">
        <!-- Mission -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-20">

            <div class="flex flex-col justify-between h-auto">
                <p class="text-5xl font-semibold">Mission</p>
                <p class="text-gray-500 leading-8">To provide an inclusive platform that strengthens the connection between alumni and students by enabling meaningful interactions, sharing valuable resources, and offering opportunities for personal and professional growth. Our mission is to facilitate ongoing communication, celebrate achievements, and create a supportive network that benefits the entire community.</p>
            </div>
            <div>
                <img src="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/about-us-img1.jpg" alt=""
                    class="w-[600px] rounded-lg">
            </div>
        </div>
    </section>

</body>

</html>