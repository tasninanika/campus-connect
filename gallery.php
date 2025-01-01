<?php
include('db_con/dbCon.php');
include('navbar.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Image Gallery</title>
    <link rel="stylesheet" href="./CSS/common-styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Hover effect for image scaling */
        .image-container:hover img {
            transform: scale(1.1);
            z-index: 10;
        }

        /* Show overlay on hover */
        .image-container:hover .overlay {
            opacity: 1;
        }

        /* Positioning the overlay content */
        .overlay {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .overlay-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background: rgba(0, 0, 0, 0.7);
            /* Dark transparent background */
        }

        .overlay-content h2,
        .overlay-content p {
            color: white;
            margin: 0;
        }
    </style>
</head>

<body class="bg-#F3F3F5">
    <h1 class="text-center text-2xl font-bold mb-8">Gallery</h1>

    <div class="container mx-auto p-10">
        <!-- 3x3 Image Gallery with responsive grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

            <?php
            $sql = "SELECT * FROM gallery";
            $query = mysqli_query($db, $sql);
            if (mysqli_num_rows($query) > 0) {
                while ($rows = mysqli_fetch_assoc($query)) {
                    $description = $rows['caption'];
                    $image = $rows['image_url'];

                    // Get the first 15 words of the description
                    $description_words = explode(' ', $description);
                    $short_description = implode(' ', array_slice($description_words, 0, 15)) . '...'; // Add ellipsis
            ?>

                    <div class="relative group image-container">
                        <img class="h-auto max-w-full rounded-lg transition-transform duration-500 ease-in-out"
                            src=<?php echo $image ?> alt="Image 1">
                        <!-- Overlay -->
                        <div class="overlay absolute inset-0">
                            <div class="overlay-content">
                                <p class="text-sm"><?php echo $short_description ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</body>

</html>