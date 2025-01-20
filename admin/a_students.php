<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("../db_con/dbCon.php");
		if(isset($_GET['block_id'])){
			
			$id = $_GET['block_id'];
			//echo $id;exit;
			
			$sql = "UPDATE user SET status='Block' WHERE u_id='$id'";
			//echo $sql;
			$db->query($sql);
			header("Location:a_students.php");
		}
		if(isset($_GET['unblock_id'])){
			
			$id = $_GET['unblock_id'];
			//echo $id;exit;
			
			$sql = "UPDATE user SET status='Active' WHERE u_id='$id'";
			//echo $sql;
			$db->query($sql);
			header("Location:a_students.php");
		}
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
    @tailwind components;
    @tailwind utilities;

    @layer utilities {
      .scrollbar-thin {
        scrollbar-width: thin; 
      }

      ::-webkit-scrollbar {
        width: 1px; 
        height: 1px; 
      }

      ::-webkit-scrollbar-thumb {
        background-color: #9ca3af; 
        border-radius: 8px;
      }

      ::-webkit-scrollbar-track {
        background-color: #f3f4f6; 
      }

      .dark ::-webkit-scrollbar-thumb {
        background-color: #000000; 
      }

      .dark ::-webkit-scrollbar-track {
        background-color: #374151; 
      }
    }
    </style>
</head>

<body class="bg-gray-100 font-family-karla flex" x-data="setup()" :class="{ 'dark': isDark }">
    <aside class="relative h-screen w-[350px] hidden sm:block shadow-xl bg-gray-800">
        <div class="p-8 mb-5 ">
            <a class="text-white text-base font-bold font-garamond hover:text-gray-300">Welcome,</a>
            <h1 class="text-4xl font-garamond font-bold text-white">Admin</h1>           
        </div>
        <nav class="text-white text-base  pt-3">
            <h3 class="mb-4 ml-7 text-base font-medium text-slate-400">MENU</h3>
            
            <a href="a_dashboard.php" class="flex items-center text-white gap-2.5 py-2 px-3 ml-4 mr-4 my-1 nav-item">
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
            <details class="group relative">
              <summary class="flex items-center justify-between text-white py-2 px-3 mx-4 my-2 nav-item cursor-pointer gap-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 448 512" class="stroke-white">
              <path fill="none" stroke="white" stroke-width="28" d="M219.3 .5c3.1-.6 6.3-.6 9.4 0l200 40C439.9 42.7 448 52.6 448 64s-8.1 21.3-19.3 23.5L352 102.9l0 57.1c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-57.1L48 93.3l0 65.1 15.7 78.4c.9 4.7-.3 9.6-3.3 13.3s-7.6 5.9-12.4 5.9l-32 0c-4.8 0-9.3-2.1-12.4-5.9s-4.3-8.6-3.3-13.3L16 158.4l0-71.8C6.5 83.3 0 74.3 0 64C0 52.6 8.1 42.7 19.3 40.5l200-40zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6z"/>
              </svg>
              <span class="flex-1">Alumni</span>
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
              <ul class="bg-gray-800 mt-2 pl-14 hidden group-open:block">
                <li>
                  <a href="a_alumni.php" class="text-white opacity-75 hover:opacity-100 py-2 block">Members</a>
                </li>
                <li>
                  <a href="pending_alumni.php" class="text-white opacity-75 hover:opacity-100 py-2 block">Pending Requests</a>
                </li>
              </ul>
            </details>
            <a href="a_students.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 active-nav-link gap-2.5">
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
                <path d="M9,8.087,21,3V21L9,15.913V21H5V15.913a2,2,0,0,1-2-2V10.087a2,2,0,0,1,2-2Z"/>
              </svg>Students
            </a>             
            <a href="a_announcements.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" height="20" width="20">
                <path d="M9,8.087,21,3V21L9,15.913V21H5V15.913a2,2,0,0,1-2-2V10.087a2,2,0,0,1,2-2Z"/>
              </svg>Announcement 
            </a> 
            <a href="a_event.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="22" height="22" style="shape-rendering:geometricPrecision;text-rendering:geometricPrecision;image-rendering:optimizeQuality;fill-rule:evenodd;clip-rule:evenodd" viewBox="0 0 6.827 6.827"><defs><style>.fil0{fill:white;fill-rule:nonzero}</style></defs><g id="Layer_x0020_1"><g id="_558167744"><path id="_558168296" class="fil0" d="M1.03 1.176h.655V1.4h.46V1.176H4.682V1.4h.46V1.176h.655a.176.176 0 0 1 .176.177v4.345a.176.176 0 0 1-.177.177H1.03a.176.176 0 0 1-.177-.177V1.353a.176.176 0 0 1 .177-.177zm.442.213h-.405v4.273H5.76V1.389h-.405v.065a.159.159 0 0 1-.16.16h-.567a.159.159 0 0 1-.16-.16V1.39h-2.11v.065a.159.159 0 0 1-.16.16h-.567a.159.159 0 0 1-.159-.16V1.39z"/><path id="_558168944" class="fil0" d="M1.631.951H2.2a.159.159 0 0 1 .16.16v.343a.159.159 0 0 1-.16.16h-.568a.158.158 0 0 1-.16-.16l.001-.343a.159.159 0 0 1 .16-.16zm.514.214h-.46V1.4h.46v-.235z"/><path id="_558168416" class="fil0" d="M4.628.951h.567a.159.159 0 0 1 .16.16v.343a.159.159 0 0 1-.16.16h-.567a.158.158 0 0 1-.16-.16v-.343a.159.159 0 0 1 .16-.16zm.513.214h-.46V1.4h.46v-.235z"/><path id="_558168992" class="fil0" d="M.96 1.96h4.907v.214H.96z"/><path id="_558168800" class="fil0" d="M1.507 2.41h.779v.886H1.4v-.887h.107zm.566.213h-.46v.46h.46v-.46z"/><path id="_558168032" class="fil0" d="M2.853 2.41h.779v.886h-.886v-.887h.107zm.566.213h-.46v.46h.46v-.46z"/><path id="_558167984" class="fil0" d="M1.507 3.755h.779v.887H1.4v-.887h.107zm.566.214h-.46v.46h.46v-.46z"/><path id="_558167696" class="fil0" d="M2.853 3.755h.779v.887h-.886v-.887h.107zm.566.214h-.46v.46h.46v-.46z"/><path id="_558167600" class="fil0" d="m4.747 2.703.521.213-.08.196-.521-.213z"/><path id="_558167960" class="fil0" d="m4.028 4.462.521.213-.08.197-.521-.213z"/><path id="_558167528" class="fil0" d="m4.581 4.84-.547.6-.169-.067.026-.815.007-.034.855-2.094a.27.27 0 0 1 .095-.12.17.17 0 0 1 .163-.022m-.943 2.827.358-.395.849-2.077a.08.08 0 0 0 .006-.035l-.328-.134a.077.077 0 0 0-.02.03L4.084 4.58l-.016.534zm.943-2.827.358.147c.112.045.126.182.085.281L4.581 4.84"/></g></g><path style="fill:none" d="M0 0h6.827v6.827H0z"/></svg>Event 
            </a> 
            <a href="pending_job.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20" height="20"><defs><style>.cls-2{fill:white}</style></defs><g id="briefcase_2" data-name="briefcase 2"><path class="cls-2" d="M23.5 13.53a.5.5 0 0 0-.5.5v7.26a.7.7 0 0 1-.21.52.61.61 0 0 1-.45.2L2.64 22a.7.7 0 0 1-.64-.77v-7.1a.5.5 0 0 0-.5-.5.5.5 0 0 0-.5.5v7.09A1.71 1.71 0 0 0 2.64 23h19.67a1.62 1.62 0 0 0 1.18-.51 1.73 1.73 0 0 0 .51-1.2V14a.5.5 0 0 0-.5-.47zM22.37 6H2.69A1.66 1.66 0 0 0 1 7.61V12a1 1 0 0 0 1 1h2.54a.5.5 0 0 0 0-1H2V7.61A.66.66 0 0 1 2.68 7h19.68a.67.67 0 0 1 .66.67v4.34L20.5 12a.5.5 0 0 0 0 1H23a1 1 0 0 0 .67-.28.92.92 0 0 0 .29-.68V7.68A1.67 1.67 0 0 0 22.37 6zM8.5 5.23a.5.5 0 0 0 .5-.5A1.74 1.74 0 0 1 10.74 3h3.52A1.74 1.74 0 0 1 16 4.73a.5.5 0 0 0 1 0A2.74 2.74 0 0 0 14.26 2h-3.52A2.74 2.74 0 0 0 8 4.73a.5.5 0 0 0 .5.5z"/><path class="cls-2" d="M18 15a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1zm0-3v2h-1v-2zM8 15a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1zm0-3v2H7v-2zM14.5 13a.5.5 0 0 0 0-1h-4a.5.5 0 0 0 0 1z"/></g></svg> Pending Job
            </a>
            <a href="pending_blogs.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20" height="20">
                <defs>
                  <style>.cls-2{fill:white}</style>
                </defs>
                <g id="paper">
                  <path class="cls-2" d="M19.5 1h-16a.5.5 0 0 0-.5.5v22a.5.5 0 0 0 .5.5h10.71a.49.49 0 0 0 .46-.3l5.17-4.84a.52.52 0 0 0 .16-.37V1.5a.5.5 0 0 0-.5-.5zM4 2h15v15.78h-4.77a.5.5 0 0 0-.5.5V23H4zm14.46 16.78-3.74 3.51v-3.51z"/>
                  <path class="cls-2" d="M6.5 6h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0 0 1zM6.5 9h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1zM11.5 14h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM6.5 12h10a.5.5 0 0 0 0-1h-10a.5.5 0 0 0 0 1z"/>
                </g>
              </svg>Pending Blogs 
            </a>
            <a href="pending_resources.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
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
                </svg>Pending Resources 
            </a> 
            <!-- Others Group -->
      <div>
        <h3 class="mb-4 ml-7 mt-6 text-base font-medium text-slate-400">OTHERS</h3>
        <a href="a_settings.php" class="flex items-center text-white py-2 px-3 ml-4 mr-4 my-1 nav-item gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="20" width="20" >
                <style>
                  .cls-1 {
                    stroke: white;
                    stroke-width: 30; /* Adjust stroke width if needed */
                    fill: none;
                  }
                </style>
              <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path class="cls-1" d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>Settings
            </a>
      </div>
        </nav>       
    </aside> 
    <div class="w-full flex flex-col h-screen overflow-y-auto overflow-x-hidden dark:bg-gray-900">
        <!-- Desktop Header -->
        <header class="sticky top-0 z-999 w-full items-center bg-white dark:bg-gray-800 shadow py-2 px-6  hidden sm:flex">
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
        <!-- Profile Dropdown -->
        <div x-data="{ isOpen: false }" class="relative">
                <button
                  @click="isOpen = !isOpen"
                  class="relative z-10 w-12 h-12 rounded-full overflow-hidden border-2 border-gray-700 hover:border-gray-300 focus:outline-none"
                >
                  <img
                    src="../images/icons/user-solid.svg"
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
            <div class="lg:mx-10 mx-auto max-w-screen-2xl my-5 p-4 md:p-6 2xl:p-10">
                <div class="mx-auto max-w-242.5">
                    <!-- Breadcrumb Start -->
                    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <h2 class="text-title-md2 text-base font-bold text-black dark:text-white">
                            Students
                        </h2>

                        <nav>
                            <ol class="flex items-center gap-2">
                                <li>
                                    <a class="font-medium dark:text-white" href="a_dashboard.php">Dashboard /</a>
                                </li>
                                <li class="text-purple-400">Students</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Breadcrumb End -->

                </div>
                <!-- Alumni -->
                <div
                    class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-gray-700 dark:bg-gray-800 sm:px-7.5 xl:pb-1">
                    <div class="overflow-x-auto scrollbar-thin">
                        <table class="table font-family-karla text-center">
                            <!-- head -->
                            <thead>
                                <tr class="text-base dark:text-white dark:border-gray-700">
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Class ID</th>
                                    <th>Batch</th>
                                    <th>Department</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
								include_once '../db_con/dbCon.php';
								$result = mysqli_query($db,"SELECT * FROM user INNER JOIN student on user.u_id=student.student_id");
								while($row = mysqli_fetch_array($result)) {
							?>
                            <tbody id="myTable">
                                <!-- row 1 -->
                                <tr class="dark:text-white dark:border-gray-700">
                                    <td>
                                        <img src="../upload/images/<?php echo $row["id_photo"]; ?>" alt="Avatar"
                                            class="mask mask-circle h-14 w-14" />
                                    </td>
                                    <td><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["class_id"]; ?></td>
                                    <td><?php echo $row["batch"]; ?></td>
                                    <td><?php echo $row["department"]; ?></td>
                                    <td>+88<?php echo $row["contact_number"]; ?></td>
                                    <td><?php echo $row["full_address"]; ?></td>
                                    <td><?php echo $row["city"]; ?></td>
                                    <?php if ($row['status']=='Active'){ ?>
                                    <td>Active</td>
                                    <?php }
						else{?>
                                    <td>
                                        <button
                                            class="btn btn-sm btn-warning bg-yellow-400 flex items-center justify-center">
                                            <a class="flex items-center text-gray-700 py-2"
                                                href="approve_students.php?unblock_id=<?=$row['u_id']?>">
                                                <i class="fas fa-hourglass"></i>&nbsp;<span>Pending</span>
                                            </a>
                                        </button>
                                    </td>
                                    <?php }?>
                                    <?php if ($row['status']=='Active'){ ?>
                                    <td>
                                        <button
                                            class="btn btn-sm btn-block bg-red-600 flex items-center justify-center">
                                            <a class="flex items-center text-white py-2"
                                                href="a_students.php?block_id=<?=$row['u_id']?>">
                                                <i class="fas fa-ban t"></i>&nbsp;<span>Block</span>
                                            </a>
                                        </button>
                                    </td>

                                    <?php }
						else{?>
                                    <td>
                                        <button
                                            class="btn btn-sm btn-block bg-yellow-400 flex items-center justify-center">
                                            <a class="flex items-center text-gray-700 py-2"
                                                href="approve_students.php?unblock_id=<?=$row['u_id']?>">
                                                <i class="fas fa-unlock"></i>&nbsp;<span>UnBlock</span>
                                            </a>
                                        </button>

                                    </td>

                                    <?php }?>
                                </tr>
                                <?php
						}
					?>
                        </table>
                    </div>
                </div>

            </div>
        </main>
        <!-- main end -->
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

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
</body>
</html>
<?php
	} else {
		header('location:login.php?deactivate');
	}
?>