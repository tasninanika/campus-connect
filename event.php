<?php
session_start();
include('navbar.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header-section {
            background-image: url('https://www.pciucomputerclub.tech/assets/first-anniversary-banner-C_UdowVk.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .about {
            background-image: url('https://demo.graygrids.com/themes/eventgrids/assets/images/about/about-bg.png');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <link rel="stylesheet" href="./CSS/common-styles.css">
</head>

<body class="bg-[#f4f7fa]">
    <section class="relative min-h-screen bg-cover bg-center" id="event-section" style="background-image: url('https://demo.graygrids.com/themes/eventgrids/assets/images/hero/hero-bg.jpg');">
        <div class="absolute inset-0 bg-gradient-to-b from-purple-600/70 to-purple-900/70 flex flex-col items-center justify-center text-center px-4">
            <p id="event-location" class="text-white text-sm bg-white/10 px-4 py-2 rounded-full flex items-center gap-2 mb-4"></p>
            <h1 id="event-name" class="text-white font-bold text-3xl md:text-5xl mb-4"></h1>
            <p id="event-description" class="text-white/80 max-w-lg mx-auto mb-6"></p>
            <a href="#" class="bg-pink-600 hover:bg-pink-500 text-white font-semibold py-3 px-6 rounded-lg transition">
                View Event
            </a>
        </div>
        <div class="absolute left-1/2 bottom-0 transform -translate-x-1/2 translate-y-1/2 bg-cover rounded-lg shadow-lg w-[90%] max-w-4xl p-6" style="background-image: url('https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm0zODAtMDZfMS5qcGc.jpg');">
            <div class="grid grid-cols-4 text-center gap-4 text-white">
                <div>
                    <h2 id="days" class="text-white text-4xl font-bold">00</h2>
                    <p class="text-white uppercase text-sm mt-2">Days</p>
                </div>
                <div>
                    <h2 id="hours" class="text-white text-4xl font-bold">00</h2>
                    <p class="text-white uppercase text-sm mt-2">Hours</p>
                </div>
                <div>
                    <h2 id="minutes" class="text-white text-4xl font-bold">00</h2>
                    <p class="text-white uppercase text-sm mt-2">Minutes</p>
                </div>
                <div>
                    <h2 id="seconds" class="text-white text-4xl font-bold">00</h2>
                    <p class="text-white uppercase text-sm mt-2">Seconds</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Features Section -->

    <section class="my-24 py-16">
        <div class="text-center mb-12">
            <p class="text-pink-500 font-semibold mb-2">— Why Join EventGrids? —</p>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800">
                Why You Should Join Event
            </h2>
            <p class="text-black mt-2 max-w-lg mx-auto">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4 max-w-6xl mx-auto">
            <!-- Card 1 -->
            <div class="bg-white shadow-sm rounded-lg p-6 relative">
                <span class="absolute top-4 right-4 text-gray-200 text-5xl font-bold">01</span>
                <div class="flex items-center justify-center bg-purple-100 rounded-full h-16 w-16 mb-6">
                    <img src="./images/icons/mic.png" alt="Icon" class="h-8 w-8 text-purple-600">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Great Speakers</h3>
                <p class="text-black text-sm leading-relaxed">
                    How you transform your business as tech, consumer, habits industry dynamic change. Find out from.
                </p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-sm rounded-lg p-6 relative">
                <span class="absolute top-4 right-4 text-gray-200 text-5xl font-bold">02</span>
                <div class="flex items-center justify-center bg-purple-100 rounded-full h-16 w-16 mb-6">
                    <img src="./images/icons/people.png" alt="Icon" class="h-8 w-8 text-purple-600">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">New People</h3>
                <p class="text-black text-sm leading-relaxed">
                    How you transform your business as tech, consumer, habits industry dynamic change. Find out from.
                </p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white shadow-sm rounded-lg p-6 relative">
                <span class="absolute top-4 right-4 text-gray-200 text-5xl font-bold">03</span>
                <div class="flex items-center justify-center bg-purple-100 rounded-full h-16 w-16 mb-6">
                    <img src="./images/icons/speaker.png" alt="Icon" class="h-8 w-8 text-purple-600">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Global Event</h3>
                <p class="text-black text-sm leading-relaxed">
                    How you transform your business as tech, consumer, habits industry dynamic change. Find out from.
                </p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white shadow-sm rounded-lg p-6 relative">
                <span class="absolute top-4 right-4 text-gray-200 text-5xl font-bold">04</span>
                <div class="flex items-center justify-center bg-purple-100 rounded-full h-16 w-16 mb-6">
                    <img src="./images/icons/motivation.png" alt="Icon" class="h-8 w-8 text-purple-600">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Get Inspired</h3>
                <p class="text-black text-sm leading-relaxed">
                    How you transform your business as tech, consumer, habits industry dynamic change. Find out from.
                </p>
            </div>
            <!-- Card 5 -->
            <div class="bg-white shadow-sm rounded-lg p-6 relative">
                <span class="absolute top-4 right-4 text-gray-200 text-5xl font-bold">05</span>
                <div class="flex items-center justify-center bg-purple-100 rounded-full h-16 w-16 mb-6">
                    <img src="./images/icons/trophy-star.png" alt="Icon" class="h-8 w-8 text-purple-600">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Networking Session</h3>
                <p class="text-black text-sm leading-relaxed">
                    How you transform your business as tech, consumer, habits industry dynamic change. Find out from.
                </p>
            </div>
            <!-- Card 6 -->
            <div class="bg-white shadow-sm rounded-lg p-6 relative">
                <span class="absolute top-4 right-4 text-gray-200 text-5xl font-bold">06</span>
                <div class="flex items-center justify-center bg-purple-100 rounded-full h-16 w-16 mb-6">
                    <img src="./images/icons/happy-face.png" alt="Icon" class="h-8 w-8 text-purple-600">
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Meet New Faces</h3>
                <p class="text-black text-sm leading-relaxed">
                    How you transform your business as tech, consumer, habits industry dynamic change. Find out from.
                </p>
            </div>
        </div>
    </section>

    <!-- Features section end -->

    <!-- About Section -->
    <?php
    include('./db_con/dbCon.php');
    // Fetch the most recent event
    $sql = "SELECT * FROM event ORDER BY date ASC LIMIT 1";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query) > 0) {
        $event = mysqli_fetch_assoc($query);
        $event_desc = $event['description'];
        $eventDate = $event['date'];
        $eventBanner = $event['banner'];
        $eventDateObj = new DateTime($eventDate);
        $eventDateDay = $eventDateObj->format('j');
        $eventDateMonthName = $eventDateObj->format('F'); // Get full month name
        $eventDateYear = $eventDateObj->format('Y'); // Get full year
    }
    ?>
    <section class="bg-[#101130] py-24 about">
        <div class="w-[90%] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Image Section -->
            <div class="flex justify-center">
                <img
                    src="./upload/images/<?php echo $eventBanner ?>"
                    alt="Event Banner"
                    class="w-full h-auto object-contain border border-white rounded-lg">
            </div>
            <!-- Text Section -->
            <div class="text-white space-y-2">
                <div>
                    <p class="text-lg font-medium text-[#797DFC] uppercase">Get Experience</p>
                    <h2 class="text-3xl text-white font-bold">About the Event</h2>
                </div>
                <p class="leading-relaxed text-gray-300">
                    <?php echo $event_desc ?>
                </p>
                <div class="flex items-center gap-4">
                    <div class="bg-[#797DFC] p-3 text-white rounded-full w-14 h-14 flex items-center justify-center text-sm font-bold">
                        <?php echo $eventDateDay ?>th
                    </div>
                    <p class="text-md font-semibold text-white"><span><?php echo $eventDateMonthName ?></span> <span><?php echo $eventDateYear ?></span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Event Schedule -->
    <section class="w-[95%] mx-auto">
        <div class="text-center mt-24 mb-5">
            <p class="text-pink-500 font-semibold mb-2">— Events —</p>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800">
                Events Schedule
            </h2>
            <p class="text-black mt-2 max-w-lg mx-auto">
                Discover a variety of engaging sessions, thoughtfully crafted to ensure every event offers something unique and impactful.
            </p>
        </div>
        <section class="bg-gray-100 py-12">
            <div class="w-[90%] mx-auto space-y-6">
                <?php
                include('./db_con/dbCon.php');
                // Fetch all events
                $sql = "SELECT * FROM event ORDER BY date ASC";
                $query = mysqli_query($db, $sql);
                if (mysqli_num_rows($query) > 0) {
                    $index = 1; // Unique identifier for each modal
                    while ($event = mysqli_fetch_assoc($query)) {
                        $event_desc = $event['description'];
                        $eventDate = $event['date'];
                        $eventTime = $event['time'];
                        $eventLocation = $event['location'];

                        $eventDateObj = new DateTime($eventDate);
                        $eventDateDay = sprintf('%02d', $eventDateObj->format('j')); // Format day with leading zero
                        $eventDateMonthName = $eventDateObj->format('F'); // Full month name
                        $eventDateYear = $eventDateObj->format('Y'); // Full year

                        // Limit description to 10 words for the card display
                        $desc_words = explode(' ', $event_desc);
                        if (count($desc_words) > 10) {
                            $event_desc_limited = implode(' ', array_slice($desc_words, 0, 10)) . '...';
                        } else {
                            $event_desc_limited = $event_desc;
                        }
                ?>
                        <!-- Event Card -->
                        <div class="flex items-center bg-white shadow-md rounded-lg p-6 hover:border-l-4 hover:border-[#797DFC] transition-all">
                            <!-- Date Section -->
                            <div class="flex items-center gap-3 pr-6">
                                <p class="text-xl lg:text-5xl font-bold text-[#797DFC]"><?php echo $eventDateDay; ?></p>
                                <div>
                                    <p class="text-sm text-gray-500"><?php echo $eventDateMonthName; ?></p>
                                    <p class="text-sm text-gray-500"><?php echo $eventTime; ?></p>
                                </div>
                            </div>
                            <!-- Divider -->
                            <div class="w-[1px] bg-gray-300 h-20 mx-6"></div>
                            <!-- Content Section -->
                            <div class="flex-1 flex justify-center items-center space-x-4">
                                <img
                                    src="./upload/images/<?php echo $eventBanner ?>"
                                    alt="Event Thumbnail"
                                    class="rounded-full w-16 h-16 object-cover" />
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-800"><?php echo $event_desc_limited; ?></h3>
                                    <p class="text-sm text-gray-500 flex items-center gap-4">
                                        <span class="flex items-center gap-1">
                                            <img src="./images/icons/admin.png" alt="admin.png" class="w-4 h-4 rounded-full">
                                            By: <span class="text-[#797DFC] font-semibold">Administrator</span>
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <img src="./images/icons/google-maps.png" alt="" class="w-4 h-4">
                                            At: <?php echo $eventLocation; ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <!-- Button -->
                            <div>
                                <button class="bg text-white px-4 py-2 rounded-md hover:bg-blue-600" onclick="document.getElementById('modal_<?php echo $index; ?>').showModal()">
                                    Read More
                                </button>
                            </div>
                        </div>

                        <!-- Modal -->
                        <dialog id="modal_<?php echo $index; ?>" class="modal">
                            <div class="modal-box">
                                <form method="dialog">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </form>
                                <h3 class="text-lg font-bold">Event Details</h3>
                                <img
                                    src="./upload/images/<?php echo $eventBanner ?>"
                                    alt="Event Banner"
                                    class="w-full h-auto object-contain border border-white rounded-lg">
                                <p class="py-4"><strong>Date:</strong> <?php echo $eventDateDay . ' ' . $eventDateMonthName . ' ' . $eventDateYear; ?></p>
                                <p class="py-2"><strong>Time:</strong> <?php echo $eventTime; ?></p>
                                <p class="py-2"><strong>Location:</strong> <?php echo $eventLocation; ?></p>
                                <p class="py-2"><strong>Description:</strong> <?php echo $event_desc; ?></p>
                            </div>
                        </dialog>
                <?php
                        $index++; // Increment modal identifier
                    }
                } else {
                    echo "<p class='text-center text-gray-500'>No events available.</p>";
                }
                ?>
            </div>
        </section>

    </section>

    <script>
        // Fetch event data
        fetch('fetch_event.php')
            .then(response => response.json())
            .then(event => {
                // Populate event details
                document.getElementById('event-location').innerHTML = `📍 ${event.location}`;
                document.getElementById('event-name').textContent = event.event_name;
                document.getElementById('event-description').textContent = event.description;

                // Initialize countdown
                const eventDate = new Date(`${event.date} ${event.time}`);
                const countdown = () => {
                    const now = new Date();
                    const diff = eventDate - now;

                    if (diff <= 0) {
                        document.getElementById('days').textContent = '00';
                        document.getElementById('hours').textContent = '00';
                        document.getElementById('minutes').textContent = '00';
                        document.getElementById('seconds').textContent = '00';
                        return;
                    }

                    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                    document.getElementById('days').textContent = String(days).padStart(2, '0');
                    document.getElementById('hours').textContent = String(hours).padStart(2, '0');
                    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
                    document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
                };

                // Update countdown every second
                countdown();
                setInterval(countdown, 1000);
            });
    </script>
</body>

</html>