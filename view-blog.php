<?php
session_start();
isset($_SESSION["email"]);

?>
<?php
include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusConnect - Blog</title>
    <link rel="stylesheet" href="./CSS/common-styles.css">
    <script src="https://kit.fontawesome.com/38dda128d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- <style>
        /* Toast container */
        #toast-container {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 9999;
        }

        /* Basic Toast Styling */
        .toast {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            opacity: 0.9;
            transition: opacity 0.5s ease-in-out;
            min-width: 200px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Success Toast */
        .toast.success {
            background-color: green;
        }

        /* Close button */
        .toast .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
    </style> -->

</head>

<body class="bg-[#faf8ff]">
    <section class="w-[95%] mx-auto min-h-screen my-11">
        <?php
        $blog_id = $_GET['blog_id'];
        $sql = "SELECT * FROM blog WHERE blog_id = '$blog_id'";
        $query = mysqli_query($db, $sql);
        if (mysqli_num_rows($query) > 0) {
            $blog = mysqli_fetch_assoc($query);
            $blog_title = $blog['title'];
            $blog_type = $blog['type'];
            $description = $blog['description'];
            $posted_date = $blog['created_at'];
            $u_id = $blog['u_id'];
            $postedDate = new DateTime($posted_date);
            $formattedDate = $postedDate->format('F j, Y, g:i A');
            $formattedDate2 = $postedDate->format('j.m.y');
            $word_count = str_word_count($description);
            $reading_time = ceil($word_count / 200); // Calculate reading time based on 200 words per minute
        }
        // Fetching the information of the alumni posted the blog
        $alumni_sql = "SELECT * FROM alumni JOIN user on alumni.alumni_id = user.u_id WHERE alumni.alumni_id = '$u_id'";
        $query2 = mysqli_query($db, $alumni_sql);
        if (mysqli_num_rows($query2) > 0) {
            $alumni = mysqli_fetch_assoc($query2);
            $alumni_fname = $alumni['first_Name'];
            $alumni_lname = $alumni['last_Name'];
            $alumni_address = $alumni['full_address'];
            $alumni_image = $alumni['id_photo'];
            $alumni_dept = $alumni['department'];
        }
        ?>
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-11">
            <!-- Sidebar -->
            <div class="lg:col-span-2 row-span-1 overflow-y-auto lg:sticky top-5">
                <div class="my-3">
                    <h3>✨Article Information</h3>
                </div>
                <div class="bg-white shadow-md rounded-md px-8 py-5 flex flex-col gap-5">
                    <div class="flex items-center gap-3">
                        <i class="text-[#797DFC] fa-solid fa-tag inline-block"></i>
                        <p class="text-black text-sm"><span class="font-semibold">Category:</span> <?php echo $blog_type; ?></p>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="text-[#797DFC] fa-solid fa-clock"></i>
                        <p class="text-black text-sm"><span class="font-semibold">Updated:</span> <?php echo $formattedDate2; ?></p>
                    </div>
                    <div class="flex items-center gap-1">
                        <div class="flex items-center gap-3">
                            <i class="text-[#797DFC] fa-solid fa-user"></i>
                            <p class="text-black text-sm"><span class="font-semibold">Author:</span> </p>
                        </div>
                        <p class="text-black"><?php echo $alumni_fname ?> <?php echo $alumni_lname ?></p>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="text-[#797DFC] fa-solid fa-book-open-reader"></i>
                        <p class="text-black text-sm"><span class="font-semibold">Reading Time:</span> <?php echo $reading_time; ?> min</p>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="col-span-4 row-span-3 overflow-y-auto">
                <div class="breadcrumbs text-sm my-2">
                    <ul>
                        <li class="font-bold text-black text-sm"><a href="blogs.php">Blogs</a></li>
                        <li class="text-sm text-black"><?php echo $blog_title ?></li>
                    </ul>
                </div>
                <div class="bg-white p-11">
                    <h2 class="text-center text-black"><?php echo $blog_title; ?></h2>
                    <p class="text-center text-black text-sm"><i class="fa-solid fa-calendar text-[#797DFC] mr-1"></i> Published: <span class="text-[#797DFC]"><?php echo $formattedDate; ?></span></p>
                    <div class="my-5">
                        <p class="text-black text-sm leading-8 text-justify"><?php echo $description; ?></p>
                    </div>
                </div>
                <!-- Comment Section -->
                <div class="bg-white p-6 rounded-md shadow-md w-full mx-auto my-11">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Leave a Comment</h3>
                    <form action="add_comment.php" method="POST">
                        <!-- Hidden Input for Blog ID -->
                        <input type="hidden" name="blog_id" value="<?php echo htmlspecialchars($blog_id, ENT_QUOTES, 'UTF-8'); ?>">

                        <!-- Comment Textarea -->
                        <textarea
                            class="w-full border border-black rounded-md p-4 text-black focus:outline-none focus:ring-2 focus:ring-[#797DFC] focus:border-transparent"
                            placeholder="Have something to add? We'd love to hear your perspective—drop a comment and spark some dialogue!"
                            rows="4"
                            name="comment"
                            <?php echo (!isset($_SESSION["email"])) ? 'disabled' : ''; ?>></textarea>

                        <!-- Submit Button -->
                        <button
                            type="submit"
                            class="mt-4 bg-[#797DFC] text-white font-semibold py-2 px-6 rounded-md hover:bg-[#5a5dc4] transition"
                            <?php echo (!isset($_SESSION["email"])) ? 'disabled title="You must log in to comment."' : ''; ?>>
                            Comment
                        </button>

                        <!-- Error Message for Not Logged In -->
                        <?php if (!isset($_SESSION["email"])): ?>
                            <p class="text-sm text-red-500 mt-2">You must log in to post a comment.</p>
                        <?php endif; ?>
                    </form>

                    <!-- Showing all comments -->
                    <div class="mt-11">
                        <h3>View Comments</h3>
                        <hr class="mb-11 border-1 border-gray-400 rounded-lg">
                        <?php
                        $blog_id = $_GET['blog_id'];
                        include('fetch_comments.php');
                        ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
</body>

</html>

</html>