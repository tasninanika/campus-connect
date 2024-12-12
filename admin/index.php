<?php
	session_start();
	if ($_SESSION['login'] == TRUE && $_SESSION['status'] == 'Active') {
		include("../db_con/dbCon.php");
	?>

<body class="bg-gray-100 font-family-karla flex">
    <aside class="relative h-screen w-96 hidden sm:block shadow-xl bg-gray-800">
        <div class="p-10 mb-10 border-b border-gray-500">
            <a class="text-white text-base font-bold font-garamond hover:text-gray-300">Welcome,</a>
                    <h1 class="text-4xl font-garamond font-bold text-white dark:text-gray-800">Admin</h1>      
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <h3 class="mb-4 ml-6 text-sm font-medium text-[#cbd1d3]">MENU</h3>
            
            <a href="a_dashboard.php" class="flex items-center active-nav-link text-white gap-2.5 py-4 pl-6 nav-item">
                <svg
                    class="fill-current"
                    width="24"
                    height="20"
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
            
            <a href="a_lawyer.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M20.7739 18C21.5232 18 22.1192 17.5285 22.6543 16.8691C23.7498 15.5194 21.9512 14.4408 21.2652 13.9126C20.5679 13.3756 19.7893 13.0714 18.9999 13M17.9999 11C19.3806 11 20.4999 9.88071 20.4999 8.5C20.4999 7.11929 19.3806 6 17.9999 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M3.2259 18C2.47659 18 1.88061 17.5285 1.34548 16.8691C0.250028 15.5194 2.04861 14.4408 2.73458 13.9126C3.43191 13.3756 4.21052 13.0714 4.99994 13M5.49994 11C4.11923 11 2.99994 9.88071 2.99994 8.5C2.99994 7.11929 4.11923 6 5.49994 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M8.08368 15.1112C7.0619 15.743 4.38286 17.0331 6.01458 18.6474C6.81166 19.436 7.6994 20 8.8155 20H15.1843C16.3004 20 17.1881 19.436 17.9852 18.6474C19.6169 17.0331 16.9379 15.743 15.9161 15.1112C13.52 13.6296 10.4797 13.6296 8.08368 15.1112Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M15.4999 7.5C15.4999 9.433 13.9329 11 11.9999 11C10.0669 11 8.49988 9.433 8.49988 7.5C8.49988 5.567 10.0669 4 11.9999 4C13.9329 4 15.4999 5.567 15.4999 7.5Z" stroke="currentColor" stroke-width="1.5" />
            </svg>
                Lawyers
            </a>            
            <a href="a_user.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M18.6161 20H19.1063C20.2561 20 21.1707 19.4761 21.9919 18.7436C24.078 16.8826 19.1741 15 17.5 15M15.5 5.06877C15.7271 5.02373 15.9629 5 16.2048 5C18.0247 5 19.5 6.34315 19.5 8C19.5 9.65685 18.0247 11 16.2048 11C15.9629 11 15.7271 10.9763 15.5 10.9312" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                <path d="M4.48131 16.1112C3.30234 16.743 0.211137 18.0331 2.09388 19.6474C3.01359 20.436 4.03791 21 5.32572 21H12.6743C13.9621 21 14.9864 20.436 15.9061 19.6474C17.7889 18.0331 14.6977 16.743 13.5187 16.1112C10.754 14.6296 7.24599 14.6296 4.48131 16.1112Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M13 7.5C13 9.70914 11.2091 11.5 9 11.5C6.79086 11.5 5 9.70914 5 7.5C5 5.29086 6.79086 3.5 9 3.5C11.2091 3.5 13 5.29086 13 7.5Z" stroke="currentColor" stroke-width="1.5" />
            </svg>
                Users
            </a> 
            <a href="l_booking.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                <path d="M17 15.8462C17 14.8266 17.8954 14 19 14C20.1046 14 21 14.8266 21 15.8462C21 16.2137 20.8837 16.5561 20.6831 16.8438C20.0854 17.7012 19 18.5189 19 19.5385V20M18.9902 22H18.9992" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16 22H6.59087C5.04549 22 3.81631 21.248 2.71266 20.1966C0.453365 18.0441 4.1628 16.324 5.57757 15.4816C8.12805 13.9629 11.2057 13.6118 14 14.4281" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="currentColor" stroke-width="1.5" />
            </svg>
               Booked Lawyer
            </a>           
            <a href="add_lawyer.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none">
                    <path d="M12 7.5C12 9.433 10.433 11 8.5 11C6.567 11 5 9.433 5 7.5C5 5.567 6.567 4 8.5 4C10.433 4 12 5.567 12 7.5Z" stroke="currentColor" stroke-width="1.5" />
                    <path d="M13.5 11C15.433 11 17 9.433 17 7.5C17 5.567 15.433 4 13.5 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M13.1429 20H3.85714C2.83147 20 2 19.2325 2 18.2857C2 15.9188 4.07868 14 6.64286 14H10.3571C11.4023 14 12.3669 14.3188 13.1429 14.8568" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M19 14V20M22 17L16 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
                Add Lawyers
            </a>                                   
            <a href="a_settings.php" class="flex items-center text-white opacity-75 hover:opacity-100 gap-2.5 py-4 pl-6 nav-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"  fill="none">
                <path d="M15.5 12C15.5 13.933 13.933 15.5 12 15.5C10.067 15.5 8.5 13.933 8.5 12C8.5 10.067 10.067 8.5 12 8.5C13.933 8.5 15.5 10.067 15.5 12Z" stroke="currentColor" stroke-width="1.5" />
                <path d="M21.011 14.0965C21.5329 13.9558 21.7939 13.8854 21.8969 13.7508C22 13.6163 22 13.3998 22 12.9669V11.0332C22 10.6003 22 10.3838 21.8969 10.2493C21.7938 10.1147 21.5329 10.0443 21.011 9.90358C19.0606 9.37759 17.8399 7.33851 18.3433 5.40087C18.4817 4.86799 18.5509 4.60156 18.4848 4.44529C18.4187 4.28902 18.2291 4.18134 17.8497 3.96596L16.125 2.98673C15.7528 2.77539 15.5667 2.66972 15.3997 2.69222C15.2326 2.71472 15.0442 2.90273 14.6672 3.27873C13.208 4.73448 10.7936 4.73442 9.33434 3.27864C8.95743 2.90263 8.76898 2.71463 8.60193 2.69212C8.43489 2.66962 8.24877 2.77529 7.87653 2.98663L6.15184 3.96587C5.77253 4.18123 5.58287 4.28891 5.51678 4.44515C5.45068 4.6014 5.51987 4.86787 5.65825 5.4008C6.16137 7.3385 4.93972 9.37763 2.98902 9.9036C2.46712 10.0443 2.20617 10.1147 2.10308 10.2492C2 10.3838 2 10.6003 2 11.0332V12.9669C2 13.3998 2 13.6163 2.10308 13.7508C2.20615 13.8854 2.46711 13.9558 2.98902 14.0965C4.9394 14.6225 6.16008 16.6616 5.65672 18.5992C5.51829 19.1321 5.44907 19.3985 5.51516 19.5548C5.58126 19.7111 5.77092 19.8188 6.15025 20.0341L7.87495 21.0134C8.24721 21.2247 8.43334 21.3304 8.6004 21.3079C8.76746 21.2854 8.95588 21.0973 9.33271 20.7213C10.7927 19.2644 13.2088 19.2643 14.6689 20.7212C15.0457 21.0973 15.2341 21.2853 15.4012 21.3078C15.5682 21.3303 15.7544 21.2246 16.1266 21.0133L17.8513 20.034C18.2307 19.8187 18.4204 19.711 18.4864 19.5547C18.5525 19.3984 18.4833 19.132 18.3448 18.5991C17.8412 16.6616 19.0609 14.6226 21.011 14.0965Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
            </svg>
                Settings
            </a>                                   
        </nav>       
    </aside>
    <div class="w-full flex flex-col h-screen overflow-y-auto">
        <!-- Desktop Header -->
        <header class="w-full items-center bg-white py-4 px-6 hidden sm:flex">
            <div class="w-1/2">
            <h1 class="mb-36 lg:mb-0 -ml-10 lg:-ml-0 lg:text-4xl font-garamond flex multicolor-text"><img src="images/logo (2).png" alt="" class="lg:w-14 w-14 -mt-1">Justice Portal</h1>
            </div>
            <div class=" w-1/2 flex justify-end">
                    <a href="logout.php" class="block px-4 py-2 font-semibold ">Sign Out</a>
            </div>
        </header>
        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-gray-800 py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="a_dashboard.php" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-regular fa-user mr-3"></i>
                Lawyers                   
                </a>
                <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-solid fa-question mr-3"></i>    
                Users
                </a>
                <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                Add Lawyers
                </a>
                <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                
                </a>
                <a href="logout.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sign-out-alt mr-3"></i>
                    Sign Out
                </a>
            </nav>
        </header>
        <!-- main start -->
        <main>
        <div class="lg:mx-10 mx-auto max-w-screen-2xl my-5 p-4 md:p-6 2xl:p-10">
            <div class="mx-auto max-w-242.5">
              <!-- Breadcrumb Start -->
              <div
                class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
                >
                <h2 class="text-title-md2 text-2xl font-bold text-black dark:text-white">
                  Dashboard
                </h2>

                <nav>
                  <ol class="flex items-center gap-2">
                    <li>
                      <a class="font-medium" href="user_dashboard.php">Dashboard /</a>
                    </li>
                    <li class="text-[#0E675C]">Home</li>
                  </ol>
                </nav>
              </div>
              <!-- Breadcrumb End -->                
                    <div class="w-full p-6 shadow-lg rounded-lg mx-auto">                            
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                    <div id="total" class="bg-gray-100 p-4 rounded"></div>
                                    <div id="total2" class="bg-gray-100 p-4 rounded"></div>
                                    <div id="total3" class="bg-gray-100 p-4 rounded"></div>
                                    <div id="total4" class="bg-gray-100 p-4 rounded"></div>
                                    <div id="total5" class="bg-gray-100 p-4 rounded"></div>
                                </div>
                    </div>                       
            </div>
          </div>
        </main>
         <!-- main end -->
    </div>
    
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
<?php
	} else {
		header('location:login.php?deactivate');
	}
?>