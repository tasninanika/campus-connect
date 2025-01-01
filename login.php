<?php
    include('navbar.php');    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CampusConnect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./CSS/common-styles.css">
    <style>
        .font-poppins{
            font-family: Poppins;
        }

    </style>
    <script>
    function preventBack() {
        window.history.forward()
    };
    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    }
    </script>
</head>
<body class="overflow-hidden">
    <img class="fixed bottom-0 left-[-35px] h-full z-[-1]" src="images/icons/wave.png" alt="Background wave">
    <div class="w-screen h-screen grid lg:grid-cols-2 gap-28 p-8">
        <div class="hidden lg:flex justify-end items-center">
            <img class="w-[500px]" src="images/icons/login.svg" alt="Background Image">
        </div>
        <div class="flex justify-center lg:justify-center items-center">
            <form action="db_con/db_login.php" method="POST" id="validateForm" class="w-[360px]">
                <div class="flex justify-center">
                    <img class="h-24" src="images/icons/education.gif" alt="Avatar">
                </div>
                <h2 class="mt-4 mb-6 h1 text-center uppercase">Login</h2>
                <?php
				if(isset($_GET['error'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div role='alert' class='alert alert-error mb-4'>
                                  <svg
                                    xmlns='http://www.w3.org/2000/svg'
                                    class='h-6 w-6 shrink-0 stroke-current'
                                    fill='none'
                                    viewBox='0 0 24 24'>
                                    <path
                                      stroke-linecap='round'
                                      stroke-linejoin='round'
                                      stroke-width='2'
                                      d='M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z' />
                                  </svg>
                                  <span>Error! Wrong password or email.</span>
                                </div>";
				}
				else if(isset($_GET['deactivate'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div role='alert' class='alert alert-warning'>
                            <svg
                              xmlns='http://www.w3.org/2000/svg'
                              class='h-6 w-6 shrink-0 stroke-current'
                              fill='none'
                              viewBox='0 0 24 24'>
                              <path
                                stroke-linecap='round'
                                stroke-linejoin='round'
                                stroke-width='2'
                                d='M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z' />
                            </svg>
                            <span>Warning: Invalid password or email!</span>
                          </div>";
			}?>
                <div class="relative flex items-center mb-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333" class="w-[18px] h-[18px] absolute right-2"
                viewBox="0 0 682.667 682.667">
                <defs>
                  <clipPath id="a" clipPathUnits="userSpaceOnUse">
                    <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                  </clipPath>
                </defs>
                <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                  <path fill="none" stroke-miterlimit="10" stroke-width="40"
                    d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                    data-original="#000000"></path>
                  <path
                    d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                    data-original="#000000"></path>
                </g>
              </svg>
                    <div class="flex-1 relative">
                    <input name="email" type="text" required
                class="bg-transparent w-full text-sm text-gray-800 border-b border-gray-400 focus:border-gray-800 px-2 py-3 outline-none placeholder:text-gray-500 font-poppins"
                placeholder="Email" id="email" />
                    </div>
                </div>
                <div class="relative flex items-center mb-6">
                <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" fill="#333" stroke="#333"
                      class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                      <path
                          d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                          data-original="#000000"></path>
                  </svg>
                    <div class="flex-1 relative">
                    <input name="password" type="password"  minlength="6" required
                      class="bg-transparent w-full text-sm text-gray-800 border-b border-gray-400 focus:border-gray-800 px-2 py-3 outline-none placeholder:text-gray-500 font-poppins"
                      placeholder="Password" id="password"/>
                    </div>
                </div>
                <a href="#" class="block text-right text-sm hover:text-gray-500 text-[#797DFC]">Forgot Password?</a>
                <button type="submit" name="login" class="mt-6 w-full h-12 bg-gradient-to-r from-[#797DFC] to-gray-700 text-white uppercase rounded-full cursor-pointer hover:to-[#797DFC] transition">Login</button>
                <div class="mt-4">
                    <p class="font-poppins text-gray-800 text-sm text-center">Don't have an account? <a href="alumni_registration.php"
       class="font-poppins font-semibold hover:underline mt-2 hover:text-gray-500 text-[#797DFC] block">
        Register as Alumni
    </a>
    <a href="student_registration.php"
       class="font-poppins font-semibold hover:underline mt-2 hover:text-gray-500 text-[#797DFC] block">
        Register as Student
    </a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('validateForm');
        const emailField = form.querySelector('[name="email"]');
        const passwordField = form.querySelector('[name="password"]');

        form.addEventListener('submit', function(event) {
            let isValid = true;

            // Validate email field
            const emailValue = emailField.value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (emailValue === '') {
                showError(emailField, 'Please Enter your email address');
                isValid = false;
            } else if (!emailRegex.test(emailValue)) {
                showError(emailField, 'Please Enter a valid email address');
                isValid = false;
            } else {
                showSuccess(emailField);
            }

            // Validate password field
            const passwordValue = passwordField.value.trim();
            if (passwordValue === '') {
                showError(passwordField, 'Please Enter Your Password');
                isValid = false;
            } else {
                showSuccess(passwordField);
            }

            if (!isValid) {
                event.preventDefault();
            }
        });

        function showError(input, message) {
            const formGroup = input.parentElement;
            const errorElement = formGroup.querySelector('.error-message');
            if (!errorElement) {
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-message';
                errorDiv.style.color = 'red';
                errorDiv.innerText = message;
                formGroup.appendChild(errorDiv);
            } else {
                errorElement.innerText = message;
            }
            input.classList.add('invalid');
            input.classList.remove('valid');
        }

        function showSuccess(input) {
            const formGroup = input.parentElement;
            const errorElement = formGroup.querySelector('.error-message');
            if (errorElement) {
                formGroup.removeChild(errorElement);
            }
            input.classList.add('valid');
            input.classList.remove('invalid');
        }
        });

        // toggle
        document.addEventListener('DOMContentLoaded', function () {
            const togglePassword = document.getElementById('togglePassword');
            const passwordField = document.getElementById('password');        

            // Hide/Show the eye icon based on input value
            passwordField.addEventListener('input', function () {
                if (passwordField.value.trim() === '') {
                    togglePassword.style.display = 'block';
                } else {
                    togglePassword.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
