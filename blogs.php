<?php
session_start();
include('navbar.php');
include('./db_con/dbCon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Topics</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./CSS/common-styles.css">
</head>

<body class="bg-[#faf8ff]">

    <section class="w-full flex justify-center my-11">
        <img src="./images/blog-banner-final.gif" alt="" class="">
    </section>

    <?php
    // Fetch all blogs
    include('./db_con/dbCon.php');

    // Fetch count of articles for each type
    $type_count_sql = "SELECT type, COUNT(*) as count FROM blog WHERE status = 'Approve' GROUP BY type";
    $type_count_result = mysqli_query($db, $type_count_sql);
    $type_counts = [];
    while ($row = mysqli_fetch_assoc($type_count_result)) {
        $type_counts[$row['type']] = $row['count'];
    }
    ?>

    <!-- Title Section -->
    <section class="text-center mt-8">
        <h1 class="flex items-center justify-center gap-2">
            <span class="text-xl">⚡</span> Trending Topics
        </h1>
    </section>

    <!-- Header Container -->
    <section class="mt-6">
        <div class="bg-white shadow-sm rounded-full p-6 max-w-5xl mx-auto">
            <!-- Topics -->
            <div class="flex justify-around flex-wrap">
                <?php foreach (array_slice($type_counts, 0, 5) as $type => $count): ?>
                    <a href="view-categories.php?type=<?php echo urlencode($type); ?>" class="text-center flex flex-col items-center">
                        <div class="relative w-16 h-16 border-2 border-gray-500 rounded-full flex items-center justify-center" style="cursor: pointer;">
                            <img src="./images/icons/<?php echo $type ?>.png" alt="<?php echo $type ?>" class="w-10 h-10">
                            <div class="absolute -top-1 -right-1 bg text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full">
                                <?php echo $count; ?>
                            </div>
                        </div>
                        <p class="mt-2 text-sm font-medium text-gray-800"><?php echo ucfirst($type); ?></p>
                    </a>
                <?php endforeach; ?>

                <!-- Explore All Button -->
                <div class="flex items-center space-x-2">
                    <span class="text-gray-400 text-sm">or...</span>
                    <a href="categories.php" class="py-2 px-6 bg text-sm font-medium rounded-full hover:shadow-lg transition">
                        Explore All
                    </a>
                </div>
            </div>
        </div>
    </section>



    <?php
    // Pagination logic
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $blogs_per_page = 6;
    $offset = ($page - 1) * $blogs_per_page;

    $total_blogs_query = "SELECT COUNT(*) as total FROM blog";
    $total_blogs_result = mysqli_query($db, $total_blogs_query);
    $total_blogs_row = mysqli_fetch_assoc($total_blogs_result);
    $total_blogs = $total_blogs_row['total'];
    $total_pages = ceil($total_blogs / $blogs_per_page);

    $sql = "SELECT * FROM blog WHERE status = 'Approve' LIMIT $blogs_per_page OFFSET $offset";
    $query = mysqli_query($db, $sql);
    ?>

    <!-- Blogs Container -->
    <section class="w-[95%] mx-auto my-11">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-11">
            <?php
            if (mysqli_num_rows($query) > 0) {
                while ($blog = mysqli_fetch_assoc($query)) {
                    $blog_title = $blog['title'];
                    $blog_type = $blog['type'];
                    $description = $blog['description'];
                    $limited_description = implode(' ', array_slice(explode(' ', $description), 0, 15)) . '...';
                    // Split the blog type into words
                    $type_words = explode(' ', $blog_type);

                    // Handle the display of the first two words with truncation
                    if (count($type_words) >= 2) {
                        $formatted_type = $type_words[0] . ' ' . substr($type_words[1], 0, 3) . '.';
                    } else {
                        $formatted_type = $type_words[0]; // If there's only one word, display it as is
                    }
                    $poster_id = $blog['u_id'];

                    $word_count = str_word_count($description);
                    $reading_time = ceil($word_count / 200); // Calculate reading time based on 200 words per minute

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

        <!-- Pagination -->
        <div class="flex justify-center mt-8 space-x-2">
            <?php if ($page > 1) : ?>
                <a href="?page=<?php echo $page - 1; ?>" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Previous</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                <a href="?page=<?php echo $i; ?>" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 <?php echo $i === $page ? 'bg-gray-500 text-white' : ''; ?>">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $total_pages) : ?>
                <a href="?page=<?php echo $page + 1; ?>" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Next</a>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>