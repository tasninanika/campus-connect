<?php
include('./db_con/dbCon.php');
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <title>CampusConnect</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');

    body {
        font-family: "Poppins", sans-serif;
    }

    button {
        color: white;
    }

    li {
        color: #707070;
    }

    .navbar-dropdown {
        border: 1px solid #797DFC;
    }
    </style>
</head>

<body>
    <div class="navbar bg-base-100 py-5">
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
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[2] mt-3 w-52 p-2 shadow">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li>
                        <details>
                            <summary>Explore</summary>
                            <ul class="bg-base-100 rounded-t-none p-2">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li>
                    <details>
                        <summary>Explore</summary>
                        <ul class="bg-base-100 rounded-t-none p-2">
                            <li><a href="blogs.php">Blog</a></li>
                            <li><a href="event.php">Event</a></li>
                            <li><a href="jobs.php">Job</a></li>
                        </ul>
                    </details>
                </li>
            </ul>
        </div>

        <!-- Login/Logout Section -->
        <div class="navbar-end ml-auto mr-5">
            <?php 
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
                        $dashboard_link = ($role === 'Student') ? "./student/student_dashboard.php" : 
                        (($role === 'Alumni') ? "./alumni/alumni_dashboard.php" : null);
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

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>