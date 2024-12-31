<?php
	session_start();
    // include("../navbar.php");
	if ($_SESSION['login'] == TRUE && $_SESSION['status'] == 'Active') {
		include("../db_con/dbCon.php");
        
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,800;1,800&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                'button-color': '#0E675C', 
              }
            }
          }
        }
    </script>
    <style>
        .font-garamond{
            font-family: "EB Garamond", serif;
        }
        .font-poppins{
            font-family: "Poppins", sans-serif;
        }
        .font-family-karla { font-family: karla; }
        .cta-btn { color: #3d68ff; }
        .active-nav-link { background: #374151; }
        .nav-item:hover { background: #374151; }
        .account-link:hover { background: #0E675C; }

        /* Compiled dark classes from Tailwind */
  .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
    border-color: rgba(55, 65, 81);
  }
  .dark .dark\:bg-gray-50 {
    background-color: rgba(249, 250, 251);
  }
  .dark .dark\:bg-gray-100 {
    background-color: rgba(243, 244, 246);
  }
  .dark .dark\:bg-gray-600 {
    background-color: rgba(75, 85, 99);
  }
  .dark .dark\:bg-gray-700 {
    background-color: rgba(55, 65, 81);
  }
  .dark .dark\:bg-gray-800 {
    background-color: rgba(31, 41, 55);
  }
  .dark .dark\:bg-gray-900 {
    background-color: rgba(17, 24, 39);
  }
  .dark .dark\:bg-red-700 {
    background-color: rgba(185, 28, 28);
  }
  .dark .dark\:bg-green-700 {
    background-color: rgba(4, 120, 87);
  }
  .dark .dark\:hover\:bg-gray-200:hover {
    background-color: rgba(229, 231, 235);
  }
  .dark .dark\:hover\:bg-gray-600:hover {
    background-color: rgba(75, 85, 99);
  }
  .dark .dark\:hover\:bg-gray-700:hover {
    background-color: rgba(55, 65, 81);
  }
  .dark .dark\:hover\:bg-gray-900:hover {
    background-color: rgba(17, 24, 39);
  }
  .dark .dark\:border-gray-100 {
    border-color: rgba(243, 244, 246);
  }
  .dark .dark\:border-gray-400 {
    border-color: rgba(156, 163, 175);
  }
  .dark .dark\:border-gray-500 {
    border-color: rgba(107, 114, 128);
  }
  .dark .dark\:border-gray-600 {
    border-color: rgba(75, 85, 99);
  }
  .dark .dark\:border-gray-700 {
    border-color: rgba(55, 65, 81);
  }
  .dark .dark\:border-gray-900 {
    border-color: rgba(17, 24, 39);
  }
  .dark .dark\:hover\:border-gray-800:hover {
    border-color: rgba(31, 41, 55);
  }
  .dark .dark\:text-white {
    color: rgba(255, 255, 255);
  }
  .dark .dark\:text-gray-50 {
    color: rgba(249, 250, 251);
  }
  .dark .dark\:text-gray-100 {
    color: rgba(243, 244, 246);
  }
  .dark .dark\:text-gray-200 {
    color: rgba(229, 231, 235);
  }
  .dark .dark\:text-gray-400 {
    color: rgba(156, 163, 175);
  }
  .dark .dark\:text-gray-500 {
    color: rgba(107, 114, 128);
  }
  .dark .dark\:text-gray-700 {
    color: rgba(55, 65, 81);
  }
  .dark .dark\:text-gray-800 {
    color: rgba(31, 41, 55);
  }
  .dark .dark\:text-red-100 {
    color: rgba(254, 226, 226);
  }
  .dark .dark\:text-green-100 {
    color: rgba(209, 250, 229);
  }
  .dark .dark\:text-blue-400 {
    color: rgba(96, 165, 250);
  }
  .dark .group:hover .dark\:group-hover\:text-gray-500 {
    color: rgba(107, 114, 128);
  }
  .dark .group:focus .dark\:group-focus\:text-gray-700 {
    color: rgba(55, 65, 81);
  }
  .dark .dark\:hover\:text-gray-100:hover {
    color: rgba(243, 244, 246);
  }
  .dark .dark\:hover\:text-blue-500:hover {
    color: rgba(59, 130, 246);
  }
  .dark .dark\:text-purple-400 {
    color: rgb(216 180 254);
  }
  .dark .dark\:stroke-black {
    stroke: rgb(0, 0, 0);  }
    </style>
</head>
<body class="bg-slate-100 font-family-karla flex" x-data="setup()" :class="{ 'dark': isDark }">
    <aside class="relative h-screen w-[350px] hidden sm:block shadow-xl bg-gray-800">
        <div class="p-8 mb-5 ">
            <a class="text-white text-base font-bold font-garamond hover:text-gray-300">Welcome,</a>
            <?php
			    $a=$_SESSION['student_id'];
							
				$result = mysqli_query($db,"SELECT * FROM user, student WHERE user.u_id=student.student_id AND user.status='Active' AND user.u_id='$a'");
							
				if($row = mysqli_fetch_array($result)) {
							?>
                    <h1 class="text-4xl font-garamond font-bold text-white dark:text-white">
                    <?php echo $row['first_Name'];?></h1>
                <?php
							}
				?>           
        </div>
        <nav class="text-white text-base  pt-3">
            <h3 class="mb-4 ml-7 text-base font-medium text-slate-400">MENU</h3>
            
            <a href="student_dashboard.php" class="flex items-center text-white gap-2.5 py-2 px-3 ml-4 mr-4 my-1 active-nav-link">
                <svg
                    class="fill-current"
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                        fill=""
                    />
                    <path
                        d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                        fill=""
                    />
                    <path
                        d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                        fill=""
                    />
                    <path
                        d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                        fill=""
                    />
                </svg>
                Dashboard
            </a> 
            <a href="student_announcement.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" height="20" width="20">
                <path d="M9,8.087,21,3V21L9,15.913V21H5V15.913a2,2,0,0,1-2-2V10.087a2,2,0,0,1,2-2Z"/>
              </svg>Announcement 
            </a> 
            <a href="student_resources.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="20">
                  <defs>
                    <style>
                      /* Stroke color set to white for both light and dark modes */
                      .cls-4 {
                        stroke: white;
                        stroke-width: 32;
                        fill: none;
                      }
                    </style>
                  </defs>
                  <path
                    class="cls-4"
                    d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"
                  />
                </svg>Resources 
            </a> 
            <!-- Others Group -->
      <div>
        <h3 class="mb-4 ml-7 mt-6 text-base font-medium text-slate-400">OTHERS</h3>
            <a href="student_profile.php" class="flex items-center text-white gap-2.5 py-2 px-3 ml-4 mr-4 my-1 nav-item">
                <svg
                    class="fill-current"
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    >
                    <path
                        d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                        fill=""
                    />
                    <path
                        d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                        fill=""
                    />
                </svg>
                Profile
            </a>
            <details class="group relative">
              <summary class="flex items-center justify-between text-white py-2 px-3.5 mx-4 my-2 nav-item cursor-pointer">
                <i class="fas fa-align-left mr-3"></i>
                <span class="flex-1">Pages</span>
                <svg
                  class="ml-auto fill-current transition-transform group-open:rotate-180"
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                    >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                    fill="currentColor"
                  />
                </svg>
              </summary>
              <ul class="bg-gray-800 mt-2 pl-12 hidden group-open:block">
                <li>
                  <a href="student_settings.php" class="text-white opacity-75 hover:opacity-100 py-2 block">Edit profile</a>
                </li>
                <li>
                  <a href="student_changePass.php" class="text-white opacity-75 hover:opacity-100 py-2 block">Change Password</a>
                </li>
              </ul>
            </details>
      </div>
        </nav>       
    </aside> 

    <div class="w-full flex flex-col h-screen overflow-y-auto overflow-x-hidden dark:bg-gray-900">
        <!-- Desktop Header -->
        <header class="sticky top-0 z-999 w-full items-center bg-white dark:bg-gray-800 shadow pt-5 px-6  hidden sm:flex">
            <div class="w-1/2">
            <h1 class="mb-36 lg:mb-0 -ml-10 lg:-ml-0 lg:text-4xl font-garamond flex dark:text-white multicolor-text"><img src="images/logo (2).png" alt="" class="lg:w-14 w-14 -mt-1"></h1>
            </div>
            <div class="w-1/2 flex justify-end gap-4">
            <div class="pt-2">
              <button
                aria-hidden="true"
                @click="toggleTheme"
                class="group p-2 transition-colors duration-200 rounded-full bg-gray-100 border hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none"
              >
                <svg
                  x-show="isDark"
                  width="20"
                  height="20"
                  class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="purple"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"
                    fill="white"
                  />
                </svg>
                <svg
                  x-show="!isDark"
                  width="20"
                  height="20"
                  class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke=""
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"
                  />
                </svg>
              </button>
            </div>
        <!-- Notification Dropdown -->
        <div x-data="{ 
            dropdownOpen: false, 
            unreadCount: 0,
            fetchUnreadCount() {
                fetch('check_unread.php')
                    .then(res => res.json())
                    .then(data => {
                        this.unreadCount = data.unread_count;
                    });
            },
            markAsRead() {
                fetch('mark_as_read.php', { method: 'POST' })
                    .then(() => {
                        this.unreadCount = 0; // Red dot hide
                    });
            }
            }" x-init="fetchUnreadCount(); setInterval(fetchUnreadCount, 5000)" class="relative">
            <a
                class="relative flex h-9 w-9 items-center justify-center rounded-full top-2 border border-gray-300 bg-gray-100 hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white"
                href="#"
                @click.prevent="dropdownOpen = !dropdownOpen; notifying = false"
            >
            
                <!-- Notification Bell -->
                <a href="#" 
                @click.prevent="dropdownOpen = !dropdownOpen; markAsRead();" 
                class="relative flex h-9 w-9 -top-7 items-center justify-center rounded-full border border-gray-300 bg-gray-100 hover:text-primary dark:border-strokedark dark:bg-meta-4 dark:text-white">

                  <!-- Notification Dot (Single Red Dot with Animation) -->
                  <span 
                      x-show="unreadCount > 0"
                      class="absolute -top-1 right-0 z-10 h-2 w-2 rounded-full bg-red-500"
                  >
                      <span 
                          class="absolute -z-1 inline-flex h-full w-full animate-ping rounded-full bg-red-500 opacity-75"
                      ></span>
                  </span>

                  <!-- Bell Icon -->
                  <svg
                      class="fill-current duration-300 ease-in-out"
                      width="18"
                      height="18"
                      viewBox="0 0 18 18"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                      <path
                          d="M16.1999 14.9343L15.6374 14.0624C15.5249 13.8937 15.4687 13.7249 15.4687 13.528V7.67803C15.4687 6.01865 14.7655 4.47178 13.4718 3.31865C12.4312 2.39053 11.0812 1.7999 9.64678 1.6874V1.1249C9.64678 0.787402 9.36553 0.478027 8.9999 0.478027C8.6624 0.478027 8.35303 0.759277 8.35303 1.1249V1.65928C8.29678 1.65928 8.24053 1.65928 8.18428 1.6874C4.92178 2.05303 2.4749 4.66865 2.4749 7.79053V13.528C2.44678 13.8093 2.39053 13.9499 2.33428 14.0343L1.7999 14.9343C1.63115 15.2155 1.63115 15.553 1.7999 15.8343C1.96865 16.0874 2.2499 16.2562 2.55928 16.2562H8.38115V16.8749C8.38115 17.2124 8.6624 17.5218 9.02803 17.5218C9.36553 17.5218 9.6749 17.2405 9.6749 16.8749V16.2562H15.4687C15.778 16.2562 16.0593 16.0874 16.228 15.8343C16.3968 15.553 16.3968 15.2155 16.1999 14.9343ZM3.23428 14.9905L3.43115 14.653C3.5999 14.3718 3.68428 14.0343 3.74053 13.6405V7.79053C3.74053 5.31553 5.70928 3.23428 8.3249 2.95303C9.92803 2.78428 11.503 3.2624 12.6562 4.2749C13.6687 5.1749 14.2312 6.38428 14.2312 7.67803V13.528C14.2312 13.9499 14.3437 14.3437 14.5968 14.7374L14.7655 14.9905H3.23428Z"
                          fill="purple"
                      />
                  </svg>
              </a>


            <!-- Notification Dropdown -->
            <div
                x-show="dropdownOpen"
                @click.outside="dropdownOpen = false"
                class="absolute right-0 mt-2 w-80 rounded-lg border border-gray-400 bg-white shadow-lg dark:border-gray-700 dark:bg-gray-800"
                x-transition
            >
                <!-- Header -->
                <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700">
                    <h5 class="text-sm font-semibold text-gray-800 dark:text-gray-200">
                        Notifications
                    </h5>
                </div>

                <!-- Notification List -->
                <ul class="max-h-56 overflow-y-auto divide-y divide-gray-200 dark:divide-gray-700">
                    <?php 
                    $sql = "SELECT * FROM announcement ORDER BY created_at DESC LIMIT 3";
                    $query = mysqli_query($db, $sql);

                    if(mysqli_num_rows($query) > 0) {
                        while ($rows = mysqli_fetch_assoc($query)) {
                            $announcement_title = $rows['title'];
                            $posted_date = $rows['created_at']; 
                    ?>
                        <li>
                            <a
                                href="#"
                                class="block px-4 py-3 transition-all hover:bg-gray-100 dark:hover:bg-gray-700"
                            >
                                <p class="text-sm font-medium text-gray-700 dark:text-gray-200">
                                    <?php echo htmlspecialchars($announcement_title); ?>
                                </p>
                                <span class="block text-xs text-gray-500 dark:text-gray-400">
                                    <?php echo date('d M, Y', strtotime($posted_date)); ?>
                                </span>
                            </a>
                        </li>
                    <?php
                        }
                    } else { ?>
                        <li class="px-4 py-3 text-sm text-gray-500 dark:text-gray-400">
                            No new notifications.
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <!-- Profile Dropdown -->
        <div x-data="{ isOpen: false }" class="relative">
                <button
                  @click="isOpen = !isOpen"
                  class="relative z-10 w-12 h-12 rounded-full overflow-hidden border-2 border-gray-700 hover:border-gray-300 focus:outline-none"
                >
                  <img
                    src="../upload/images/<?php echo $row['id_photo']; ?>"
                    alt="User Profile"
                    class="w-full h-full object-cover"
                  />
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div
                  x-show="isOpen"
                  @click.outside="isOpen = false"
                  class="absolute right-0 mt-2 w-48 rounded-xl border border-gray-400 dark:border-gray-700 bg-white shadow-lg dark:bg-gray-800"
                  x-transition
                  >
                  <a
                    href="../index.php"
                    class="block mx-2 px-2 my-1 py-1 rounded-lg text-sm dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700"
                  >
                    Home
                  </a>
                  <a
                    href="../alumni/alumni_settings.php"
                    class="block mx-2 px-2 my-1 py-1 rounded-lg text-sm dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700"
                  >
                    Settings
                  </a>
                  <a
                    href="../logout.php"
                    class="block mx-2 px-2 my-1 py-1 rounded-lg text-sm dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-700"
                  >
                    Sign Out
                  </a>
                </div>
              </div>
        </div>
      </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-gray-800 py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <h1 class="text-white text-3xl font-semibold font-garamond hover:text-gray-300"><?php echo $row['first_Name'];?> <?php echo $row['last_Name'];?></h1>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
              <a href="user_dashboard.php" class="flex items-center gap-2.5 active-nav-link text-white py-2 pl-4 nav-item">
                <svg
                    class="fill-current"
                    width="16"
                    height="16"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z"
                        fill=""
                    />
                    <path
                        d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z"
                        fill=""
                    />
                    <path
                        d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z"
                        fill=""
                    />
                    <path
                        d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z"
                        fill=""
                    />
                </svg>
                    Dashboard
                </a>
                <a href="u_profile.php" class="flex gap-2.5 items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <svg
                    class="fill-current"
                    width="18"
                    height="18"
                    viewBox="0 0 18 18"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                        fill=""
                    />
                    <path
                        d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                        fill=""
                    />
                </svg>
                Profile                    
                </a>
                <a href="u_booking.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-5 nav-item">
                <i class="fas fa-solid fa-question mr-3"></i>    
                Booking requests
                </a>
                <a href="settings.php" class="flex items-center gap-2.5 text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"  fill="none">
                <path d="M15.5 12C15.5 13.933 13.933 15.5 12 15.5C10.067 15.5 8.5 13.933 8.5 12C8.5 10.067 10.067 8.5 12 8.5C13.933 8.5 15.5 10.067 15.5 12Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M21.011 14.0965C21.5329 13.9558 21.7939 13.8854 21.8969 13.7508C22 13.6163 22 13.3998 22 12.9669V11.0332C22 10.6003 22 10.3838 21.8969 10.2493C21.7938 10.1147 21.5329 10.0443 21.011 9.90358C19.0606 9.37759 17.8399 7.33851 18.3433 5.40087C18.4817 4.86799 18.5509 4.60156 18.4848 4.44529C18.4187 4.28902 18.2291 4.18134 17.8497 3.96596L16.125 2.98673C15.7528 2.77539 15.5667 2.66972 15.3997 2.69222C15.2326 2.71472 15.0442 2.90273 14.6672 3.27873C13.208 4.73448 10.7936 4.73442 9.33434 3.27864C8.95743 2.90263 8.76898 2.71463 8.60193 2.69212C8.43489 2.66962 8.24877 2.77529 7.87653 2.98663L6.15184 3.96587C5.77253 4.18123 5.58287 4.28891 5.51678 4.44515C5.45068 4.6014 5.51987 4.86787 5.65825 5.4008C6.16137 7.3385 4.93972 9.37763 2.98902 9.9036C2.46712 10.0443 2.20617 10.1147 2.10308 10.2492C2 10.3838 2 10.6003 2 11.0332V12.9669C2 13.3998 2 13.6163 2.10308 13.7508C2.20615 13.8854 2.46711 13.9558 2.98902 14.0965C4.9394 14.6225 6.16008 16.6616 5.65672 18.5992C5.51829 19.1321 5.44907 19.3985 5.51516 19.5548C5.58126 19.7111 5.77092 19.8188 6.15025 20.0341L7.87495 21.0134C8.24721 21.2247 8.43334 21.3304 8.6004 21.3079C8.76746 21.2854 8.95588 21.0973 9.33271 20.7213C10.7927 19.2644 13.2088 19.2643 14.6689 20.7212C15.0457 21.0973 15.2341 21.2853 15.4012 21.3078C15.5682 21.3303 15.7544 21.2246 16.1266 21.0133L17.8513 20.034C18.2307 19.8187 18.4204 19.711 18.4864 19.5547C18.5525 19.3984 18.4833 19.132 18.3448 18.5991C17.8412 16.6616 19.0609 14.6226 21.011 14.0965Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
                Settings
                </a>
                <a href="change_p.php" class="flex items-center gap-2 text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"  fill="none">
                <path d="M15.395 21.9009C13.9836 21.966 12.5498 22 10.9709 22C9.39194 22 7.95815 21.966 6.5467 21.9009C4.8693 21.8235 3.4909 20.515 3.26684 18.8447C3.12061 17.7547 3 16.6376 3 15.5C3 14.3624 3.1206 13.2453 3.26684 12.1553C3.4909 10.485 4.8693 9.17649 6.5467 9.09909C7.95815 9.03397 9.39194 9 10.9709 9C12.5498 9 13.9836 9.03397 15.395 9.09909C16.4545 9.14798 17.3946 9.68796 18 10.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M17 14.978C17 13.8856 17.8954 13 19 13C20.1046 13 21 13.8856 21 14.978C21 15.3718 20.8837 15.7387 20.6831 16.0469C20.0854 16.9656 19 17.8416 19 18.9341V19.4286M19 22H19.012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.5 9V6.5C6.5 4.01472 8.51472 2 11 2C13.4853 2 15.5 4.01472 15.5 6.5V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 15.49V15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8 15.49V15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
                    Change Password
                </a>
                <a href="logout.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-5 nav-item">
                    <i class="fas fa-sign-out-alt mr-2"></i>
                    Sign Out
                </a>
            </nav>
        </header>
        <!-- main start -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10 lg:mt-5 lg:ml-5">
          <h3 class="font-semibold text-xl text-gray-900 dark:text-gray-50">Notifications</h3>
          <div class="grid grid-cols-1 pt-8">
          <!-- Recent Activities part1 -->
          <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
            <div class="block w-full overflow-x-auto">
            <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100  py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                 New Announcement
                </div>
                <?php
                    // Fetch jobs only for the currently logged-in alumni
                    $sql = "SELECT * FROM announcement ORDER BY created_at DESC LIMIT 3";
                $query = mysqli_query($db, $sql);

                    if (mysqli_num_rows($query) > 0) {
                        // If there are job posts, display them
                        while ($rows = mysqli_fetch_array($query)) {
                            $announcement_title = $rows['title'];
                            $content = $rows['content'];
                          if (isset($rows['created_at']) && !is_null($rows['created_at'])) {
                            $posted_date = $rows['created_at'];

                            // Convert database UTC time to Asia/Dhaka time
                            $postedDate = new DateTime($posted_date, new DateTimeZone('UTC'));
                            $postedDate->setTimezone(new DateTimeZone('Asia/Dhaka'));

                            $currentDate = new DateTime('now', new DateTimeZone('Asia/Dhaka'));

                            // Calculate total difference in seconds
                            $totalSeconds = $currentDate->getTimestamp() - $postedDate->getTimestamp();

                            if ($totalSeconds >= 30 * 24 * 60 * 60) { // More than 30 days
                                $displayDate = "30+ days ago";
                            } elseif ($totalSeconds >= 24 * 60 * 60) { // More than 1 day
                                $days = floor($totalSeconds / (24 * 60 * 60));
                                $displayDate = $days === 1 ? "1 day ago" : "{$days} days ago";
                            } elseif ($totalSeconds >= 60 * 60) { // More than 1 hour
                                $hours = floor($totalSeconds / (60 * 60));
                                $displayDate = $hours === 1 ? "1 hour ago" : "{$hours} hours ago";
                            } elseif ($totalSeconds >= 60) { // More than 1 minute
                                $minutes = floor($totalSeconds / 60);
                                $displayDate = $minutes === 1 ? "1 minute ago" : "{$minutes} minutes ago";
                            } else { // Less than 1 minute
                                $displayDate = "Just now";
                            }
                        }  
                            ?>
                            <ul class="my-1 dark:bg-gray-800">
                              <li class="flex px-4 border-b dark:border-gray-700 ">
                                <div class="flex-grow flex items-center border-gray-100 dark:border-gray-400 text-sm text-gray-600 dark:text-gray-100 py-4">
                                  <div class="flex-grow flex justify-between items-center">
                                    <div class="self-center">
                                      <h3 class="text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" style="outline: none;"><?php echo $announcement_title; ?></h3>
                                      
                                    <p class="mt-1 dark:text-gray-400"><?php echo $displayDate; ?></p>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <?php
                        }
                    } else {
                        // If no job posts exist, display a message
                        ?>
                        <div class="text-center py-4 text-gray-500 dark:text-gray-400">
                            <p>No posts available. Create a new post to get started.</p>
                        </div>
                        <?php
                    }
                    ?>
                
    
          
        </div>
              <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                 New Resources
                </div>
                <?php
                    // Fetch jobs only for the currently logged-in alumni
                    $result = mysqli_query($db, "SELECT 
                                    user.first_Name AS first_name, 
                                    user.last_Name AS last_name, 
                                    alumni.id_photo AS creator_photo,
                                    resources.title AS resources_title, 
                                    resources.content AS description, resources.file AS uploaded_file,
                                    resources.created_at AS resources_created_at, resources.material_id AS id
                                FROM 
                                    resources
                                INNER JOIN 
                                    alumni ON resources.u_id = alumni.alumni_id
                                INNER JOIN 
                                    user ON alumni.alumni_id = user.u_id
                                WHERE 
                                    resources.status = 'Approve'
                                ORDER BY 
                                    resources.created_at DESC
                            ");


                    if (mysqli_num_rows($result) > 0) {
                        // If there are job posts, display them
                        while ($row = mysqli_fetch_array($result)) {
                          if (isset($row['resources_created_at']) && !is_null($row['resources_created_at'])) {
                            $posted_date = $row['resources_created_at'];

                            // Convert database UTC time to Asia/Dhaka time
                            $postedDate = new DateTime($posted_date, new DateTimeZone('UTC'));
                            $postedDate->setTimezone(new DateTimeZone('Asia/Dhaka'));

                            $currentDate = new DateTime('now', new DateTimeZone('Asia/Dhaka'));

                            // Calculate total difference in seconds
                            $totalSeconds = $currentDate->getTimestamp() - $postedDate->getTimestamp();

                            if ($totalSeconds >= 30 * 24 * 60 * 60) { // More than 30 days
                                $displayDate = "30+ days ago";
                            } elseif ($totalSeconds >= 24 * 60 * 60) { // More than 1 day
                                $days = floor($totalSeconds / (24 * 60 * 60));
                                $displayDate = $days === 1 ? "1 day ago" : "{$days} days ago";
                            } elseif ($totalSeconds >= 60 * 60) { // More than 1 hour
                                $hours = floor($totalSeconds / (60 * 60));
                                $displayDate = $hours === 1 ? "1 hour ago" : "{$hours} hours ago";
                            } elseif ($totalSeconds >= 60) { // More than 1 minute
                                $minutes = floor($totalSeconds / 60);
                                $displayDate = $minutes === 1 ? "1 minute ago" : "{$minutes} minutes ago";
                            } else { // Less than 1 minute
                                $displayDate = "Just now";
                            }
                        }  
                            ?>
                            <ul class="my-1 dark:bg-gray-800">
                              <li class="flex px-4 border-b dark:border-gray-700 ">
                                <div class="flex-shrink-0 my-4 mr-3">
                                  <img src="../upload/images/<?php echo $row['creator_photo']; ?>" alt="User Image" class="h-9 w-9 rounded-full">
                                </div>
                                <div class="flex-grow flex items-center border-gray-100 dark:border-gray-400 text-sm text-gray-600 dark:text-gray-100 py-4">
                                  <div class="flex-grow flex justify-between items-center">
                                    <div class="self-center">
                                      <h3 class="text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" style="outline: none;"><span class="font-bold"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></span> shared a resource.</h3>
                                      
                                      
                                    <p class="mt-1 dark:text-gray-400"><?php echo $displayDate; ?></p>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <?php
                        }
                    } else {
                        // If no job posts exist, display a message
                        ?>
                        <div class="text-center py-4 text-gray-500 dark:text-gray-400">
                            <p>No posts available. Create a new post to get started.</p>
                        </div>
                        <?php
                    }
                    ?>
            
                
    
          
        </div>
          </div>
        </main>
         <!-- main end -->
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }
  </script>
  <!-- dropdown -->
  <script>
  // Select all <details> elements
  const dropdowns = document.querySelectorAll('.dropdown');

  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener('toggle', (event) => {
      if (dropdown.open) {
        // Close all other dropdowns
        dropdowns.forEach((otherDropdown) => {
          if (otherDropdown !== dropdown && otherDropdown.open) {
            otherDropdown.open = false;
          }
        });
      }
    });
  });
</script>

</body>
</html>
<?php
	} else {
		header('location:login.php?deactivate');
	}
?>