<?php
    include('navbar.php')
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
</head>
<body>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="container mx-auto p-4">
    <div class="bg-gradient-to-r from-[#797DFC] to-gray-800 rounded-lg shadow-lg p-6 md:p-10 max-w-3xl mx-auto">
      <h1 class="text-3xl text-white font-bold text-center mb-8">Create A New Account</h1>

      <!-- Progress Bar -->
      <div class="mb-8">
        <div class="flex justify-between mb-2">
          <span class="text-xs font-semibold inline-block py-1 px-4 uppercase rounded-full text-black bg-white" id="step1">
                        Personal Info
                    </span>
          <span class="text-xs font-semibold inline-block py-1 px-4 uppercase rounded-full text-black bg-white opacity-50" id="step2">
                        Educational Details
                    </span>
          <span class="text-xs font-semibold inline-block py-1 px-4 uppercase rounded-full text-black bg-white opacity-50" id="step3">
                        Account Info
                    </span>
        </div>
        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-[#797DFC]">
          <div id="progress-bar"
            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-violet-600 w-1/3 transition-all duration-500 ease-in-out">
          </div>
        </div>
      </div>

      <!-- Form Steps -->
      <form id="multi-step-form, validateForm" action="student_register.php" method="POST" enctype="multipart/form-data">
        <!-- Step 1: Personal Information -->
        <div id="step-1" class="step">
          <!-- first -->
          <div class="grid lg:grid-cols-2 gap-6 mb-6">
            <div>
            <label for="firstName" class="block mb-2 text-sm font-medium text-white text-bold">First Name</label>
            <input name="first_Name" type="text" id="fullName, first_Name" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-violet-800 block w-full p-2.5" required>
            </div>
            <div>
            <label for="lastName" class="block mb-2 text-sm font-medium text-white text-bold">Last Name</label>
            <input name="last_Name" type="text" id="fullName, last_Name" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-violet-800 block w-full p-2.5" required>
            </div>
          </div>
          <!-- second -->
          <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-white text-bold">Email Address</label>
            <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:border-violet-800 block w-full p-2.5" required>
          </div>
          <!-- third -->
          <div class="mb-6">
            <label for="phone" class="block mb-2 text-sm font-medium text-white text-bold">Phone Number</label>
            <input name="contact_number" type="tel" id="phone, contact_number" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:border-violet-800 block w-full p-2.5" required>
          </div>
        </div>

        <!-- Step 2: Account Details -->
        <div id="step-2" class="step hidden">
          <!-- first -->
          <div class="mb-6">
            <div>
            <label for="classId" class="block mb-2 text-sm font-medium text-white text-bold">Class ID</label>
            <input name="class_id" type="text" id="class_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
          </div>
          </div>
          <!-- second -->
          <div class="grid lg:grid-cols-2 gap-6 mb-6">
          <div>
            <label for="department" class="block mb-2 text-sm font-medium text-white text-bold">Department</label>
            <select id="department" name="department" class="w-full bg-gray-100 text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" required>
						<option value="" selected>Select</option>
						<option value="CSE">CSE</option>
						<option value="EEE">EEE</option>
						<option value="CEN">CEN</option>
						<option value="TEX">TEX</option>
						<option value="BFT">BFT</option>
						<option value="BBA">BBA</option>
						<option value="ENG">ENG</option>
						<option value="LLB">LLB</option>
						<option value="JRN">JRN</option>
					</select>
            </div>
            <div>
            <label for="batch" class="block mb-2 text-sm font-medium text-white text-bold">Batch</label>
            <select id="batch" name="batch" class="w-full bg-gray-100 text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" required>
						<option value="" selected>Select</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						<option value="32">32</option>
						<option value="33">33</option>
					</select>
            </div>
          </div>
          <!-- third -->
          <div class="grid lg:grid-cols-2 gap-6 mb-6">
            <div>
            <label for="address" class="block mb-2 text-sm font-medium text-white text-bold">Address</label>
            <input name="full_address" id="full_address" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" required>
            </div>
            <div>
            <label for="city" class="block mb-2 text-sm font-medium text-white text-bold">City</label>
            <select id="city" name="city" class="w-full bg-gray-100 text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" required>
						<option value="" selected>Select</option>
						<option value="Dhaka">Dhaka</option>
						<option value="Chittagong">Chittagong</option>
						<option value="Sylhet">Sylhet</option>
						<option value="Barishal">Barishal</option>
						<option value="Khulna">Khulna</option>
						<option value="Mymensingh">Mymensingh</option>
						<option value="Rajshahi">Rajshahi</option>
						<option value="Rangpur">Rangpur</option>
					</select>
            </div>
          </div>
        </div>

        <!-- Step 3: Account Info -->
        <div id="step-3" class="step hidden">
          <!-- first -->
        <div class="mb-6">
            <label for="image" class="block mb-2 text-sm font-medium text-white text-bold">Profile Picture</label>
            <input type="file" name="fileToUpload" id="image" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-3 rounded-md outline-[#0E675C]" oninput="CheckValue(this);" required />
          </div>
          <!-- second -->
          <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-white text-bold">Password</label>
            <input name="user_password" minlength="6" type="password" id="password, user_password" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:border-violet-800 block w-full p-2.5" required>
          </div>
          <!-- third -->
          <div class="mb-6">
            <label for="confirmPassword" class="block mb-2 text-sm font-medium text-white text-bold">Confirm Password</label>
            <input type="password" minlength="6" id="confirmPassword" class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:border-violet-800 block w-full p-2.5" required>
          </div>
        </div>
        <!-- Navigation Buttons -->
        <div class="flex justify-between mt-8">
          <button type="button" id="prevBtn" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 focus:outline-none focus:shadow-outline hidden">Previous</button>
          <button type="button" id="nextBtn" class="px-4 py-2 bg-gradient-to-r from-violet-700 to-gray-800 text-white rounded-lg hover:bg-gray-700">Next</button>
          <button name="post" type="submit" id="submitBtn" class="px-4 py-2 bg-gradient-to-r from-violet-700 to-gray-800 text-white rounded-lg hover:bg-gray-700 focus:outline-none focus:shadow-outline hidden">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
        let currentStep = 1;
        const form = document.getElementById('multi-step-form');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const submitBtn = document.getElementById('submitBtn');
        const progressBar = document.getElementById('progress-bar');

        function showStep(step) {
            document.querySelectorAll('.step').forEach(s => s.classList.add('hidden'));
            document.getElementById(`step-${step}`).classList.remove('hidden');
            
            progressBar.style.width = `${(step / 3) * 100}%`;
            for (let i = 1; i <= 3; i++) {
                const stepIndicator = document.getElementById(`step${i}`);
                if (i <= step) {
                    stepIndicator.classList.remove('opacity-50');
                } else {
                    stepIndicator.classList.add('opacity-50');
                }
            }

            prevBtn.classList.toggle('hidden', step === 1);
            nextBtn.classList.toggle('hidden', step === 3);
            submitBtn.classList.toggle('hidden', step !== 3);
        }

        function validateStep(step) {
            const currentStepElement = document.getElementById(`step-${step}`);
            const inputs = currentStepElement.querySelectorAll('input[required], select[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value) {
                    isValid = false;
                    input.classList.add('border-red-800');
                } else {
                    input.classList.remove('border-red-800');
                }
            });

            if (step === 3) {
                const password = document.getElementById('password');
                const confirmPassword = document.getElementById('confirmPassword');
                if (password.value !== confirmPassword.value) {
                    isValid = false;
                    confirmPassword.classList.add('border-red-800');
                    alert("Passwords do not match");
                }
            }

            return isValid;
        }

        nextBtn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                currentStep++;
                showStep(currentStep);
            }
        });

        prevBtn.addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            if (validateStep(currentStep)) {
                alert('Form submitted successfully!');
                
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var firstName = document.getElementById('first_Name').value;
            var lastName = document.getElementById('last_Name').value;
            var email = document.getElementById('email').value;
            var contactNumber = document.getElementById('contact_number').value;
            var userPassword = document.getElementById('user_password').value;
            var class_id = document.getElementById('class_id').value;
            var department = document.getElementById('department').value;
            var batch = document.getElementById('batch').value;
            var fullAddress = document.getElementById('full_address').value;
            var city = document.getElementById('city').value;
            
            if (!firstName || !lastName || !email || !contactNumber || !userPassword || !class_id || !department || !batch || !fullAddress || !city) {
                event.preventDefault();
                alert('Please fill in all the required fields.');
                return false;
            }

            if (!validateEmail(email)) {
                event.preventDefault();
                alert('Please enter a valid email address.');
                return false;
            }
        });

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    
            }
        });

        showStep(currentStep);

        // form submission
</script> 
</body>
</html>

