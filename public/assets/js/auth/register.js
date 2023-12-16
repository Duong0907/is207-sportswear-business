document.addEventListener('DOMContentLoaded', function () {
    // Get the password input and the checkbox
    var passwordInput = document.getElementById('password');
    var verifyInput = document.getElementById('verify');
    var showPasswordCheckbox = document.getElementById('check');

    // Add an event listener to the checkbox
    showPasswordCheckbox.addEventListener('change', function () {
        // If the checkbox is checked, change the password input type to text
        // Otherwise, change it back to password
        passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
        verifyInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
    });
});

