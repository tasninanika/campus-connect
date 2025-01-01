// Function to show the toast with a custom message
function showToast(message) {
    const toast = document.getElementById('toast-success');
    const toastMessage = document.getElementById('toast-message');

    // Set the message
    toastMessage.textContent = message;

    // Show the toast
    toast.classList.remove('hidden');

    // Auto-hide after 5 seconds
    setTimeout(() => {
        if (!toast.classList.contains('hidden')) {
            dismissToast();
        }
    }, 5000);
}

// Function to manually dismiss the toast
function dismissToast() {
    const toast = document.getElementById('toast-success');
    toast.classList.add('hidden');
}

// Example Usage: Call showToast after a successful action
document.getElementById('submitComment').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent default form submission

    // Simulate a successful action
    setTimeout(() => {
        showToast('Comment added successfully!');
    }, 500); // Simulate response time
});
