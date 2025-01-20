<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./CSS/common-styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

        body {
            font-family: "Poppins", sans-serif;
        }

        li {
            color: #707070;
        }

        .navbar {
            background-color: transparent !important;
            color: white !important;
        }

        .navbar-dropdown {
            border: 1px solid #797DFC;
        }

        header {
            background-image: url('	https://markeythemes.vercel.app/skywave/images/bg-home.png');
            background-color: #1f222b;
        }

        /* Heading */
        h1 {
            font-size: 40px;
            font-family: EB garamond !important;
            font-weight: 800 !important;
        }

        /* Normal Text */
        p {
            font-family: Poppins !important;
        }

        /* Common buttons */
        button {
            background-color: #797DFC !important;
            color: white !important;
        }

        /* Title */
        h2 {
            font-size: 32px !important;
            font-family: EB garamond !important;
            font-weight: 800 !important;
        }

        /* Sub title */
        h3 {
            font-size: 18px !important;
            font-weight: bold !important;
        }

        /* Common bg */
        .bg {
            background-color: #797DFC !important;
            color: white !important;
        }
    </style>
    <script src="https://kit.fontawesome.com/38dda128d3.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="h-screen">
        <!-- Navbar -->
        <div class="navbar bg-transparent py-5">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content rounded-box z-[2] mt-3 w-52 p-2 shadow">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li>
                            <details>
                                <summary>Explore</summary>
                                <ul class="rounded-t-none p-2">
                                    <li><a href="blogs.php">Blog</a></li>
                                    <li><a href="event.php">Event</a></li>
                                    <li><a href="jobs.php">Job</a></li>
                                </ul>
                            </details>
                        </li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">CampusConnect</a>
            </div>

            <div class="navbar-center hidden lg:flex z-[2]">
                <ul class="menu menu-horizontal px-1 text-md">
                    <li><a href="index.php" class="text-white hover:bg-white hover:text-black">Home</a></li>
                    <li><a href="about.php" class="text-white hover:bg-white hover:text-black">About Us</a></li>
                    <li><a href="contact.php" class="text-white hover:bg-white hover:text-black">Contact Us</a></li>
                    <li><a href="gallery.php" class="text-white hover:bg-white hover:text-black">Gallery</a></li>
                    <li>
                        <details>
                            <summary class="text-white">Explore</summary>
                            <ul class="bg-transparent rounded-t-none p-2">
                                <li><a href="blogs.php" class="text-white hover:bg-white hover:text-black">Blog</a></li>
                                <li><a href="event.php" class="text-white hover:bg-white hover:text-black">Event</a></li>
                                <li><a href="jobs.php" class="text-white hover:bg-white hover:text-black">Job</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>

            <!-- Login/Logout Section -->
            <div class="navbar-end ml-auto mr-5">
                <?php
                include('./db_con/dbCon.php');
                if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
                    $u_email = $_SESSION["email"];

                    // Fetch user role
                    $role_query = "SELECT role, u_id FROM user WHERE email = '$u_email'";
                    $role_result = mysqli_query($db, $role_query);

                    if ($role_result && mysqli_num_rows($role_result) > 0) {
                        $user_data = mysqli_fetch_assoc($role_result);
                        $role = $user_data['role'];
                        $query = "";

                        // Construct query based on role
                        if ($role === 'Student') {
                            $query = "SELECT * FROM user 
                                  INNER JOIN student ON user.u_id = student.student_id 
                                  WHERE user.email = '$u_email'";
                        } elseif ($role === 'Alumni') {
                            $query = "SELECT * FROM user 
                                  INNER JOIN alumni ON user.u_id = alumni.alumni_id 
                                  WHERE user.email = '$u_email'";
                        } elseif ($role === 'Admin') {
                            $query = "SELECT * FROM user 
                                  INNER JOIN administrator ON user.u_id = administrator.administrator_id 
                                  WHERE user.email = '$u_email'";
                        }

                        // Execute dynamic query
                        $result = mysqli_query($db, $query);
                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $id_photo = $row['id_photo'];
                            $dashboard_link = ($role === 'Student') ? "student_dashboard.php" : (($role === 'Alumni') ? "./alumni/alumni_dashboard.php" : null);
                ?>
                            <div class="dropdown dropdown-end">
                                <div tabindex="0" class="btn btn-ghost btn-circle avatar">
                                    <div class="w-10 rounded-full">
                                        <img src="./upload/images/<?php echo $id_photo ?>" alt="Profile Image">
                                    </div>
                                </div>
                                <ul tabindex="0"
                                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow navbar-dropdown">
                                    <li><a href="<?php echo $dashboard_link; ?>">Dashboard</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                    <?php
                        }
                    }
                } else { ?>
                    <span class="bg-[#797DFC] px-5 py-2 text-white rounded-full">
                        <button>
                            <img src="./images/icons/login-icon.gif" alt="login-icon" class="w-8 h-8 rounded-full inline">
                            <a href="login.php">Login</a>
                        </button>
                    </span>
                <?php } ?>
            </div>
        </div>

        <!-- Header content -->
        <div class="w-[95%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 justify-items-center items-center">
                <div class="flex flex-col gap-y-4 text-center lg:text-left">
                    <p class="text-white">Discover Opportunities</p>
                    <h1 class="text-white text-5xl font-semibold">Connecting Alumni, Students, and Opportunities</h1>
                    <p class="text-white">Your one-stop platform for networking, sharing experiences, and staying updated with the latest events, announcements, and career opportunities.</p>
                </div>
                <div class="max-w-lg">
                    <img src="https://markeythemes.vercel.app/skywave/images/web-3.svg" alt="" class="w-full h-[500px]">
                </div>
            </div>
        </div>
    </header>

    <!-- About Us -->
    <section class="w-[95%] mx-auto my-[100px]">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-11">
            <div class="col-span-1">
                <div class="flex justify-start items-center gap-x-1">
                    <div class="bg w-6 h-6 flex justify-center items-center px-1 my-1 rounded-md">
                        <p class="border border-white w-4 h-4 rounded-full flex justify-center items-center"><i class="fa-solid fa-info text-white text-[10px]"></i></p>
                    </div>
                    <p class="text-sm">---</p>
                    <p class="bg-gray-100 p-2 rounded-md text-[12px] text-[#797DFC] font-semibold">About Us</p>
                </div>
                <div>
                    <h3 class="my-3">Connecting Alumni, <br> Students, and Opportunities</h3>
                    <p class="my-3 text-justify">Campus Connect provides a seamless platform to bring together alumni and students to share experiences, collaborate on opportunities, and stay informed about university events and updates.</p>
                    <?php
                    // Database connection
                    include('./db_con/dbCon.php');

                    // Fetch total number of alumni
                    $alumni_sql = "SELECT COUNT(*) as total_alumni FROM alumni";
                    $alumni_result = mysqli_query($db, $alumni_sql);
                    $alumni_row = mysqli_fetch_assoc($alumni_result);
                    $total_alumni = $alumni_row['total_alumni'];

                    // Fetch total number of students
                    $students_sql = "SELECT COUNT(*) as total_students FROM student";
                    $students_result = mysqli_query($db, $students_sql);
                    $students_row = mysqli_fetch_assoc($students_result);
                    $total_students = $students_row['total_students'];

                    // Fetch total number of jobs
                    $jobs_sql = "SELECT COUNT(*) as total_jobs FROM job";
                    $jobs_result = mysqli_query($db, $jobs_sql);
                    $jobs_row = mysqli_fetch_assoc($jobs_result);
                    $total_jobs = $jobs_row['total_jobs'];

                    // Fetch total number of blogs
                    $blogs_sql = "SELECT COUNT(*) as total_blogs FROM blog";
                    $blogs_result = mysqli_query($db, $blogs_sql);
                    $blogs_row = mysqli_fetch_assoc($blogs_result);
                    $total_blogs = $blogs_row['total_blogs'];
                    ?>

                    <div class="flex justify-between items-center text-center my-3">
                        <div>
                            <p class="text-xl text-black font-semibold"><?php echo $total_alumni; ?></p>
                            <p>Alumni</p>
                        </div>
                        <div>
                            <p class="text-xl text-black font-semibold"><?php echo $total_students; ?>+</p>
                            <p>Students</p>
                        </div>
                        <div>
                            <p class="text-xl text-black font-semibold"><?php echo $total_jobs; ?>+</p>
                            <p>Jobs</p>
                        </div>
                        <div>
                            <p class="text-xl text-black font-semibold"><?php echo $total_blogs; ?>+</p>
                            <p>Blogs</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-span-2">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-3">
                    <div class="p-3 bg-gray-100 rounded-md">
                        <div class="flex justify-start items-center gap-2">
                            <div class="bg-gray-200 flex justify-center w-11 p-2 rounded-md">
                                <img src="./images/icons/networking.png" alt="" class="w-6">
                            </div>
                            <p class="text-xl text-black font-semibold">Professional Networking</p>
                        </div>
                        <p class="text-black my-2 text-md">Stay connected with alumni and peers to create meaningful professional networks that last a lifetime.</p>
                    </div>
                    <div class="p-3 bg-gray-100 rounded-md">
                        <div class="flex justify-start items-center gap-2">
                            <div class="bg-gray-200 flex justify-center w-11 p-2 rounded-md">
                                <img src="./images/icons/career.png" alt="" class="w-6">
                            </div>
                            <p class="text-xl text-black font-semibold">Career Development</p>
                        </div>
                        <p class="text-black my-2 text-md">Explore job opportunities, mentorship programs, and resources to enhance your career prospects.</p>
                    </div>
                    <div class="p-3 bg-gray-100 rounded-md">
                        <div class="flex justify-start items-center gap-2">
                            <div class="bg-gray-200 flex justify-center w-11 p-2 rounded-md">
                                <img src="./images/icons/knowledge.png" alt="" class="w-6">
                            </div>
                            <p class="text-xl text-black font-semibold">Knowledge Sharing</p>
                        </div>
                        <p class="text-black my-2 text-md">Access study materials, blog posts, and expert advice from alumni across diverse industries.</p>
                    </div>
                    <div class="p-3 bg-gray-100 rounded-md">
                        <div class="flex justify-start items-center gap-2">
                            <div class="bg-gray-200 flex justify-center w-11 p-2 rounded-md">
                                <img src="./images/icons/event.png" alt="" class="w-6">
                            </div>
                            <p class="text-xl text-black font-semibold">Event Participation</p>
                        </div>
                        <p class="text-black my-2 text-md">Stay updated on upcoming alumni meetups, webinars, and university-hosted events.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="w-[95%] mx-auto my-[100px]">
        <div class="flex justify-center mt-5">
            <div class="flex justify-start items-center gap-x-1">
                <div class="bg w-6 h-6 flex justify-center items-center px-1 my-1 rounded-md">
                    <p class="border border-white w-4 h-4 rounded-full flex justify-center items-center"><i class="fa-solid fa-info text-white text-[10px]"></i></p>
                </div>
                <p class="text-sm">---</p>
                <p class="bg-gray-100 p-2 rounded-md text-[12px] text-[#797DFC] font-semibold">Blogs</p>
            </div>
        </div>
        <h2 class="text-center mb-5">Explore The Thoughts</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-11">
            <?php
            $limit = 3; // Limit the number of blogs displayed
            $sql = "SELECT * FROM blog LIMIT $limit"; // Adjust query to fetch only three blogs
            $query = mysqli_query($db, $sql);

            if (mysqli_num_rows($query) > 0) {
                while ($blog = mysqli_fetch_assoc($query)) {
                    $blog_title = $blog['title'];
                    $blog_type = $blog['type'];
                    $description = $blog['description'];
                    $limited_description = implode(' ', array_slice(explode(' ', $description), 0, 15)) . '...';

                    // Format blog type
                    $type_words = explode(' ', $blog_type);
                    $formatted_type = count($type_words) >= 2
                        ? $type_words[0] . ' ' . substr($type_words[1], 0, 3) . '.'
                        : $type_words[0];

                    $poster_id = $blog['u_id'];

                    $word_count = str_word_count($description);
                    $reading_time = ceil($word_count / 200);

                    $author_sql = "SELECT * FROM alumni JOIN user ON alumni.alumni_id = user.u_id WHERE alumni.alumni_id = '$poster_id'";
                    $query2 = mysqli_query($db, $author_sql);

                    if (mysqli_num_rows($query2) > 0) {
                        $author = mysqli_fetch_assoc($query2);
                        $author_fname = $author['first_Name'];
                        $author_lname = $author['last_Name'];
                        $author_image = $author['id_photo'];
                    }
            ?>
                    <div class="blog-card max-w-sm mx-auto bg-white rounded-lg shadow-md border p-8 relative overflow-hidden">
                        <div class="z-0 w-16 bg-gradient-to-r from-[#797DFC] to-black h-16 absolute -top-3 -right-2 p-2 rounded-full">
                            <p class="text-gray-200"></p>
                        </div>
                        <div class="z-10 w-16 bg-gray-200 h-16 absolute -top-2 -right-4 p-2 rounded-full">
                            <p class="text-gray-200"></p>
                        </div>
                        <div class="bg-gradient-to-r from-[#797DFC] to-black p-2 w-[50%] text-center rounded-full absolute top-5 -left-5 text-white hover:translate-x-1 transition">
                            <span><?php echo $formatted_type ?></span>
                        </div>
                        <div class="mt-11 text-center">
                            <a href="view-blog.php?blog_id=<?php echo $blog['blog_id']; ?>">
                                <h3 class="text-lg font-bold text-gray-800 mb-4 hover:underline underline-offset-2 transition hover:cursor-pointer">
                                    <?php echo $blog_title; ?>
                                </h3>
                            </a>

                            <p class="text-black text-sm mb-6"><?php echo $limited_description ?></p>
                            <div class="flex items-center justify-center gap-5">
                                <div class="flex items-center">
                                    <img src="./upload/images/<?php echo $author_image ?>" alt="Author" class="w-8 h-8 rounded-full">
                                    <div class="ml-2">
                                        <p class="text-black text-sm font-medium"><?php echo $author_fname ?> <?php echo $author_lname ?></p>
                                    </div>
                                </div>
                                <div class="flex items-center text-sm space-x-1">
                                    <img src="./images/icons/read.png" alt="" class="w-4 h-4">
                                    <span><?php echo $reading_time; ?> Min Read</span>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p class='text-center text-gray-600'>No blogs available</p>";
            }
            ?>
        </div>
        <div class="text-center mt-11">
            <a href="blogs.php" class="px-6 py-3 bg text-white rounded-lg hover:shadow-lg transition">
                View More
            </a>
        </div>
    </section>

    <!-- Job Section -->
    <section class="w-[95%] mx-auto my-[100px]">
        <div class="flex justify-center mt-5">
            <div class="flex justify-start items-center gap-x-1">
                <div class="bg w-6 h-6 flex justify-center items-center px-1 my-1 rounded-md">
                    <p class="border border-white w-4 h-4 rounded-full flex justify-center items-center"><i class="fa-solid fa-info text-white text-[10px]"></i></p>
                </div>
                <p class="text-sm">---</p>
                <p class="bg-gray-100 p-2 rounded-md text-[12px] text-[#797DFC] font-semibold">Jobs</p>
            </div>
        </div>
        <h2 class="text-center mb-5">Find Your Dream Job</h2>
        <div id="job-container" class="grid grid-cols-1 lg:grid-cols-2 gap-8 fade-in ms-auto">
            <?php
            // Limit the number of jobs displayed
            $limit = 2;
            $sql = "SELECT * FROM job LIMIT $limit"; // Adjust table name if necessary
            $query = mysqli_query($db, $sql);

            if (mysqli_num_rows($query) > 0) {
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
                                <?php echo '<a href="view-job.php?job_id=' . $rows['job_id'] . '">Apply</a>'; ?>
                            </button>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="text-center">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/no-data-found-illustration-download-in-svg-png-gif-file-formats--office-computer-digital-work-business-pack-illustrations-7265556.png" alt="No Data Found" class="w-40 mx-auto">
                    <h3 class="text-gray-600 mt-4">No jobs found matching your criteria</h3>
                    <button onclick="history.back()" class="mt-4 px-6 py-2 bg-[#797DFC] text-white rounded-full">Go Back</button>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="text-center mt-11">
            <a href="jobs.php" class="px-6 py-3 bg text-white rounded-lg hover:shadow-lg transition">
                View More
            </a>
        </div>
    </section>

    <?php
    include('footer.php');
    ?>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>