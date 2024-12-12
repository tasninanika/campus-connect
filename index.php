<?php
    session_start();
    include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCIU Alumni</title>
    <link rel="stylesheet" href="./CSS/common-styles.css">
</head>

<body>
    <!-- hero banner -->
    <div class="w-[95%] mx-auto my-5 relative bg-cover bg-center h-[500px]"
        style="background-image: url('https://www.portcity.edu.bd/img/PCIU-1st-Convocation-2019-26.JPG');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white space-y-6 px-4">
                <h1 class="text-white">Connecting Alumni, Empowering the Future</h1>
                <p class="text-white">Stay connected with your alma mater. Join events, network with fellow alumni, and
                    inspire the next generation.</p>
                <div class="space-x-4">
                    <a href="register.php"
                        class="px-6 py-3 bg-[#797DFC] hover:bg-blue-500 rounded-full text-lg font-medium">Join Now</a>
                    <a href="events.php"
                        class="px-6 py-3 bg-[#797DFC] hover:bg-gray-600 rounded-full text-lg font-medium">Explore
                        Events</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="w-[95%] mx-auto my-[100px]">
        <h1 class="text-center">Features</h1>
        <div class="p-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Profiles Card -->
                <div
                    class="bg-[#F3F3F5] shadow-xl rounded-xl p-6 border-t-4 border-green-500 hover:scale-105 transform transition-transform duration-300">
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Profiles</h3>
                        <p class="text-gray-500 text-center mb-6">Find and view alumni profiles</p>
                        <button
                            class="bg-[#797DFC] text-white px-6 py-2 rounded-full font-medium hover:bg-green-600 transition-colors duration-300">
                            View Profiles
                        </button>
                    </div>
                </div>
                <!-- Events Card -->
                <div
                    class="bg-[#F3F3F5] shadow-xl rounded-xl p-6 border-t-4 border-blue-500 hover:scale-105 transform transition-transform duration-300">
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Events</h3>
                        <p class="text-gray-500 text-center mb-6">Upcoming and past alumni events</p>
                        <button
                            class="bg-blue-500 text-white px-6 py-2 rounded-full font-medium hover:bg-blue-600 transition-colors duration-300">
                            View Events
                        </button>
                    </div>
                </div>
                <!-- Blogs Card -->
                <div
                    class="bg-[#F3F3F5] shadow-xl rounded-xl p-6 border-t-4 border-purple-500 hover:scale-105 transform transition-transform duration-300">
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Blogs</h3>
                        <p class="text-gray-500 text-center mb-6">Read alumni blogs and articles</p>
                        <button
                            class="bg-purple-500 text-white px-6 py-2 rounded-full font-medium hover:bg-purple-600 transition-colors duration-300">
                            View Blogs
                        </button>
                    </div>
                </div>
                <!-- Study Materials Card -->
                <div
                    class="bg-[#F3F3F5] shadow-xl rounded-xl p-6 border-t-4 border-yellow-500 hover:scale-105 transform transition-transform duration-300">
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Study Materials</h3>
                        <p class="text-gray-500 text-center mb-6">Access alumni study resources</p>
                        <button
                            class="bg-yellow-500 text-white px-6 py-2 rounded-full font-medium hover:bg-yellow-600 transition-colors duration-300">
                            View Materials
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Event section -->
    <section class=" py-12 my-[100px]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-center">Upcoming Events</h1>
                <p class="text-gray-600 mt-4">Join the latest events happening in our alumni network.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event 1 -->
                <div
                    class="bg-[#F3F3F5] shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                    <div class="relative">
                        <img src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                            alt="Event Image" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-[#797DFC] text-white px-4 py-1 rounded-full">
                            Nov 12, 2024
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Alumni Networking Meetup</h3>
                            <p class="text-gray-600 mt-2">Join us for a special networking event with fellow alumni from
                                different industries.</p>
                        </div>
                        <a href="#"
                            class="mt-4 bg-[#797DFC] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300 text-center">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Event 2 -->
                <div
                    class="bg-[#F3F3F5] shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                    <div class="relative">
                        <img src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                            alt="Event Image" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-[#797DFC] text-white px-4 py-1 rounded-full">
                            Dec 5, 2024
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Alumni Workshop on Career Development</h3>
                            <p class="text-gray-600 mt-2">A career workshop designed for alumni looking to advance their
                                professional journey.</p>
                        </div>
                        <a href="#"
                            class="mt-4 bg-[#797DFC] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300 text-center">
                            View Details
                        </a>
                    </div>
                </div>

                <!-- Event 3 -->
                <div
                    class="bg-[#F3F3F5] shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                    <div class="relative">
                        <img src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                            alt="Event Image" class="w-full h-48 object-cover">
                        <div class="absolute top-4 right-4 bg-[#797DFC] text-white px-4 py-1 rounded-full">
                            Jan 15, 2025
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Alumni Reunion Gala</h3>
                            <p class="text-gray-600 mt-2">Join us for an evening of reconnections, memories, and
                                celebration with fellow alumni.</p>
                        </div>
                        <a href="#"
                            class="mt-4 bg-[#797DFC] text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-colors duration-300 text-center">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog section -->
    <section class="w-[95%] mx-auto my-[100px]">
        <h1 class="text-3xl font-extrabold text-gray-800 text-center">Our Blogs</h1>
        <p class="text-center mb-10 text-">Find the latest blogs by our alumnies.</p>
        <div class="grid grid-cols-1 lg:grid-cols-3">
            <!-- Blog-1 -->
            <div
                class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-40 object-cover"
                    src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                    alt="Blog Image">
                <div class="p-4">

                    <!-- Category -->
                    <span class="bg text-xs font-bold uppercase px-3 py-1 rounded-full">
                        Networking
                    </span>

                    <!-- Blog Title -->
                    <h3 class="mt-2">The Future of Alumni Networking</h3>

                    <!-- Blog Excerpt -->
                    <p class="text-sm">Discover how technology is shaping alumni connections and
                        helping
                        graduates stay in touch, no matter where they are.</p>

                    <!-- Author Info -->
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 object-cover rounded-full"
                            src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                            alt="Author Image">
                        <div class="ml-3">
                            <h4 class="text-gray-800 font-medium text-sm">John Doe</h4>
                            <p class="text-gray-600 text-xs">October 24, 2024</p>
                        </div>
                    </div>

                    <!-- Read More Button -->
                    <button href="#" class="mt-4 block text-white text-center px-3 py-2 rounded-lg">
                        Read More
                    </button>
                </div>
            </div>
            <div
                class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-40 object-cover"
                    src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                    alt="Blog Image">
                <div class="p-4">

                    <!-- Category -->
                    <span class="bg text-xs font-bold uppercase px-3 py-1 rounded-full">
                        Networking
                    </span>

                    <!-- Blog Title -->
                    <h3 class="mt-2">The Future of Alumni Networking</h3>

                    <!-- Blog Excerpt -->
                    <p class="text-sm">Discover how technology is shaping alumni connections and
                        helping
                        graduates stay in touch, no matter where they are.</p>

                    <!-- Author Info -->
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 object-cover rounded-full"
                            src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                            alt="Author Image">
                        <div class="ml-3">
                            <h4 class="text-gray-800 font-medium text-sm">John Doe</h4>
                            <p class="text-gray-600 text-xs">October 24, 2024</p>
                        </div>
                    </div>

                    <!-- Read More Button -->
                    <button href="#" class="mt-4 block text-white text-center px-3 py-2 rounded-lg">
                        Read More
                    </button>
                </div>
            </div>
            <div
                class="max-w-sm mx-auto bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img class="w-full h-40 object-cover"
                    src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                    alt="Blog Image">
                <div class="p-4">

                    <!-- Category -->
                    <span class="bg text-xs font-bold uppercase px-3 py-1 rounded-full">
                        Networking
                    </span>

                    <!-- Blog Title -->
                    <h3 class="mt-2">The Future of Alumni Networking</h3>

                    <!-- Blog Excerpt -->
                    <p class="text-sm">Discover how technology is shaping alumni connections and
                        helping
                        graduates stay in touch, no matter where they are.</p>

                    <!-- Author Info -->
                    <div class="flex items-center mt-3">
                        <img class="w-8 h-8 object-cover rounded-full"
                            src="https://media.istockphoto.com/id/1367296351/photo/celebrating-graduation-day.jpg?s=612x612&w=0&k=20&c=eko-UJy6V3nyAQVnH5ya-5AAwAT9gnZZhOWCdE9WXc8="
                            alt="Author Image">
                        <div class="ml-3">
                            <h4 class="text-gray-800 font-medium text-sm">John Doe</h4>
                            <p class="text-gray-600 text-xs">October 24, 2024</p>
                        </div>
                    </div>

                    <!-- Read More Button -->
                    <button href="#" class="mt-4 block text-white text-center px-3 py-2 rounded-lg">
                        Read More
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>