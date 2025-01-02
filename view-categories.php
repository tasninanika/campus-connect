<?php include('./db_con/dbCon.php'); ?>
<?php include('navbar.php'); ?>
<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/common-styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php

    // Get the blog type from the query parameter
    $type = isset($_GET['type']) ? $_GET['type'] : '';
    $type = mysqli_real_escape_string($db, $type);

    // Pagination logic
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $blogs_per_page = 6;
    $offset = ($page - 1) * $blogs_per_page;

    // Get the total count of blogs for this type
    $total_blogs_query = "SELECT COUNT(*) as total FROM blog WHERE type = '$type'";
    $total_blogs_result = mysqli_query($db, $total_blogs_query);
    $total_blogs_row = mysqli_fetch_assoc($total_blogs_result);
    $total_blogs = $total_blogs_row['total'];
    $total_pages = ceil($total_blogs / $blogs_per_page);

    // Get blogs for the current type and page
    $sql = "SELECT * FROM blog WHERE type = '$type' AND status = 'Approve' LIMIT $blogs_per_page OFFSET $offset";
    $query = mysqli_query($db, $sql);
    ?>

    <!-- Blogs Container -->
    <section class="w-[95%] mx-auto my-11">
        <h1 class="text-center font-bold mb-11">✨ Explore <span class="text-[#797DFC]"><?php echo ucfirst($type); ?></span> Blogs</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-11">
            <?php if (mysqli_num_rows($query) > 0): ?>
                <?php while ($blog = mysqli_fetch_assoc($query)): ?>
                    <?php
                    $blog_type = $blog['type'];
                    $blog_title = $blog['title'];
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
                <?php endwhile; ?>
            <?php else: ?>
                <p class="text-center text-gray-600">No blogs available for "<?php echo ucfirst($type); ?>"</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8 space-x-2">
            <?php if ($page > 1): ?>
                <a href="?type=<?php echo urlencode($type); ?>&page=<?php echo $page - 1; ?>" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Previous</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?type=<?php echo urlencode($type); ?>&page=<?php echo $i; ?>" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400 <?php echo $i === $page ? 'bg-gray-500 text-white' : ''; ?>">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?type=<?php echo urlencode($type); ?>&page=<?php echo $page + 1; ?>" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Next</a>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>