<?php
session_start();
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusConnect-Categories</title>
    <link rel="stylesheet" href="./CSS/common-styles.css">
    <script>
        function toggleCategories() {
            const hiddenCategories = document.querySelectorAll('.hidden-category');
            const viewMoreButton = document.getElementById('view-more-btn');
            hiddenCategories.forEach(category => category.classList.toggle('hidden'));
            if (viewMoreButton.innerText === "View More") {
                viewMoreButton.innerText = "View Less";
            } else {
                viewMoreButton.innerText = "View More";
            }
        }
    </script>
</head>

<body class="bg-[#faf8ff]">

    <div class="w-[50%] mx-auto flex flex-col gap-11 lg:my-20 my-5">
        <h1 class="text-center">Explore our Categories ✨</h1>
        <p class="text-center text-black leading-8">Whether you’re a photography aficionado or simply intrigued by the art of visual storytelling, our blog is your gateway to exploring the mesmerizing world of renowned photographers and the captivating narratives.</p>
    </div>

    <!-- All Categories -->
    <section class="w-[95%] mx-auto bg-white p-8 my-11 shadow-md rounded-xl">
        <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 place-items-center my-5">
            <?php
            // Fetch all distinct types
            $type_sql = "SELECT DISTINCT type FROM blog";
            $type_result = mysqli_query($db, $type_sql);
            $counter = 0; // Counter to track the number of categories displayed

            if (mysqli_num_rows($type_result) > 0) {
                while ($type_row = mysqli_fetch_assoc($type_result)) {
                    $type = $type_row['type'];

                    // Count the number of articles for each type
                    $count_sql = "SELECT COUNT(*) as total_articles FROM blog WHERE type = '$type'";
                    $count_result = mysqli_query($db, $count_sql);
                    $count_row = mysqli_fetch_assoc($count_result);
                    $total_articles = $count_row['total_articles'];

                    // Dynamic icon name
                    $type_icon = strtoupper($type);

                    // Determine if the category should be hidden or not
                    $hidden_class = ($counter >= 5) ? "hidden hidden-category" : "";
            ?>
                    <a href="view-categories.php?type=<?php echo urlencode($type); ?>" class="flex flex-col items-center text-center gap-y-2 <?php echo $hidden_class; ?>">
                        <div class="relative w-16 h-16 border-2 border-gray-500 rounded-full flex items-center justify-center cursor-pointer">
                            <img src="./images/icons/<?php echo $type_icon; ?>.png" alt="<?php echo $type; ?>" class="w-10 h-10">
                            <div class="absolute -top-1 -right-1 bg-black text-white text-xs font-bold w-5 h-5 flex items-center justify-center rounded-full">
                                <?php echo $total_articles; ?>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold"><?php echo $type; ?></h3>
                            <p class="text-sm text-gray-600"><?php echo $total_articles; ?> Articles</p>
                        </div>
                    </a>

            <?php
                    $counter++;
                }
            } else {
                echo "<p class='text-center text-gray-600'>No articles available</p>";
            }
            ?>
        </div>

        <!-- View More Button -->
        <?php if ($counter > 5) { ?>
            <div class="flex justify-center mt-8">
                <button id="view-more-btn" class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition" onclick="toggleCategories()">View More</button>
            </div>
        <?php } ?>
    </section>

</body>

</html>