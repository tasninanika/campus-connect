<?php 
session_start();
isset($_SESSION["email"]);

 ?>

<?php
    include('./db_con/dbCon.php');
    include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Job</title>
    <link rel="stylesheet" href="./CSS/common-styles.css">
    <style>
    /* .job-bg {
        background-image: linear-gradient(#4276fc, #3d73ff .01%, #3d73ff .01%, #1844b5 102%);
    } */
    .job-post-owner {
        border: 1px solid #797DFC;
    }

    @media only screen and (max-width: 600px) {
        .job-details-title {
            font-size: 25px;
        }

        .profile-card {
            background: url("https://img.freepik.com/free-vector/abstract-blue-technology-background_23-2149352058.jpg?semt=ais_hybrid");
            background-size: cover;
            background-postion: center center;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.547);
            background-blend-mode: multiply;
        }
    }
    </style>
</head>

<body>
    <section class="w-[95%] mx-auto my-5 py-3">
        <?php
            $job_id = $_GET['job_id'];
            $sql = "SELECT * FROM job WHERE job_id = '$job_id'";
            $query = mysqli_query($db, $sql);
            if (mysqli_num_rows($query) > 0) {
            $job = mysqli_fetch_assoc($query);
            $job_title = $job['title'];
            $job_type = $job['type'];
            $job_category = $job['category'];
            $company = $job['company_name'];
            $experience = $job['experience'];
            $sallary = $job['salary'];
            $location = $job['location'];
            $description = $job['description'];
            $photo = $job['logo'];
            $qualification = $job['qualification'];
            $department = $job['department'];
            $poster_id = $job['u_id'];
            $posted_date = $job['created_at'];
            $posted_day = date("d", strtotime($posted_date)); // fetching only the day
            $posted_month = date("F", strtotime($posted_date)); // fetching only the month number and converting to name
            $posted_year = date("Y", strtotime($posted_date)); // fetching only the year
        }
        // Fetching the information of the alumni posted the job
        $alumni_sql = "SELECT * FROM alumni JOIN user on alumni.alumni_id = user.u_id WHERE alumni.alumni_id = '$poster_id'";
        $query2 = mysqli_query($db, $alumni_sql);
            if (mysqli_num_rows($query2) > 0) {
                $alumni = mysqli_fetch_assoc($query2);
                $alumni_fname = $alumni['first_Name'];
                $alumni_lname = $alumni['last_Name'];
                $alumni_address = $alumni['full_address'];
                $alumni_image = $alumni['id_photo'];
                $alumni_dept = $alumni['department'];
            }
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
            class="h-[150px] md:h-[180px] rounded-lg mb-5 bg-gradient-to-r from-[#797DFC] to-black flex items-center px-5 md:px-10">
            <div class="flex items-center gap-5 w-full">
                <!-- Logo Section -->
                <div class="bg-white p-3 rounded-full flex-shrink-0">
                    <img src="./upload/images/<?php echo $photo; ?>" alt="Company Logo" class="w-[50px] md:w-[60px]">
                </div>

                <!-- Job Details Section -->
                <div class="text-white flex flex-col gap-2">
                    <h1 class="text-white job-details-title"><?php echo $job_title; ?></h1>
                    <p class="flex flex-wrap gap-3 text-white">
                        <!-- Location -->
                        <span class="flex items-center gap-1">
                            <img src="./images/icons/location-job.svg" alt="Location" class="w-4 md:w-5">
                            <?php echo $location; ?>
                        </span>
                        <!-- Job Category -->
                        <span class="flex items-center gap-1">
                            <img src="./images/icons/job-bag.svg" alt="Category" class="w-4 md:w-5">
                            <?php echo $job_category; ?>
                        </span>
                        <!-- Job Type -->
                        <span class="flex items-center gap-1">
                            <img src="./images/icons/clock.svg" alt="Type" class="w-4 md:w-5">
                            <?php echo $job_type; ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>


        <!-- Job description -->
        <div class="lg:flex sm:flex-col lg:flex-row w-full lg:gap-8">
            <div class="lg:w-3/5">
                <h3 class="mb-4">Job Description</h3>
                <hr class=" h-[0.5px] bg-gray-400 border-none">
                <div class="mt-3">
                    <p class="text-justify my-2 break-words"><?php echo $description; ?></p>
                </div>
                <!-- Job Details -->
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 my-16">
                    <!-- Date Posted -->
                    <div class="flex flex-col items-center bg-[#f5f7ff] py-5 rounded-xl ">
                        <div>
                            <img src="./images/icons/calendar.svg" alt="">
                        </div>
                        <p>Date Posted</p>
                        <h3 class="text-center"><?php echo $posted_month ?> <?php echo $posted_day ?>,
                            <?php echo $posted_year ?></h3>
                    </div>
                    <!-- Hiring Location -->
                    <div class="flex flex-col items-center bg-[#f5f7ff] py-5 rounded-xl">
                        <div>
                            <img src="./images/icons/hiring-location.svg" alt="">
                        </div>
                        <p>Hiring Location</p>
                        <h3><?php echo $location ?></h3>
                    </div>
                    <!-- Experience -->
                    <div class="flex flex-col items-center bg-[#f5f7ff] py-5 rounded-xl">
                        <div>
                            <img src="./images/icons/experience.svg" alt="">
                        </div>
                        <p>Experience</p>
                        <h3><?php echo $experience ?></h3>
                    </div>
                    <!-- Qualification -->
                    <div class="flex flex-col items-center bg-[#f5f7ff] py-5 rounded-xl">
                        <div>
                            <img src="./images/icons/qualification.svg" alt="">
                        </div>
                        <p>Qualification</p>
                        <h3><?php echo $qualification ?></h3>
                    </div>
                    <!-- Department -->
                    <div class="flex flex-col items-center bg-[#f5f7ff] py-5 rounded-xl">
                        <div>
                            <img src="./images/icons/department.svg" alt="">
                        </div>
                        <p>Department</p>
                        <h3><?php echo $department ?></h3>
                    </div>
                    <!-- Salary -->
                    <div class="flex flex-col items-center bg-[#f5f7ff] py-5 rounded-xl">
                        <div>
                            <img src="./images/icons/sallary.svg" alt="">
                        </div>
                        <p>Salary</p>
                        <h3>BDT. <?php echo $sallary ?> Tk.</h3>
                    </div>
                </div>
            </div>
            <div class="lg:w-2/5 p-3">
                <!-- Apply Card -->
                <div
                    class="max-w-sm mx-auto h-[200px] rounded-xl px-6 flex flex-col items-start justify-center gap-5 bg-white border-black-1">
                    <h2 class="text-dark">Interested in this job?</h2>
                    <button class="block border-2 border-white px-8 py-2 rounded-full">Apply</button>
                </div>

                <!-- Profile Card -->
                <div class="my-24">
                    <div class="max-w-sm mx-auto bg-[#797DFC] rounded-xl shadow-lg overflow-hidden job-post-owner">
                        <!-- Profile Picture -->
                        <div class="flex flex-col items-center py-6">
                            <img src="./upload/images/<?php echo $alumni_image; ?>" alt="Profile Picture"
                                class="w-40 h-40 rounded-full border-4 border-gray-200">
                        </div>
                        <!-- Content Section -->
                        <div class="text-center">
                            <h2 class="text-white"><?php echo $alumni_fname; ?> <?php echo $alumni_lname; ?>
                            </h2>
                            <p class="text-white"><?php echo $alumni_dept; ?></p>
                            <p class="text-sm text-white mt-2 px-4">
                                <?php echo $alumni_address; ?>
                            </p>
                        </div>
                        <!-- Contact Button -->
                        <div class="mt-5 px-6 pb-6">
                            <button class="w-full text-white py-2 rounded-full border-2 border-white">
                                Contact
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>

</html>