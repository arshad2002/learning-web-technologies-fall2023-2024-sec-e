function validateSignUpForm() {
    let username = document.getElementById('username').value;
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let repassword = document.getElementById('repassword').value;
    let userType = document.getElementById('user_type').value;

    
    if (password.length < 8) {
        alert('Password must be at least 8 characters long.');
        return false;
    }

    let hasUpperCase = false;
    let hasLowerCase = false;
    let hasDigit = false;


    for (let i = 0; i < newPassword.length; i++) {
        let char = newPassword[i];
        if (char >= 'A' && char <= 'Z') {
            hasUpperCase = true;
        } else if (char >= 'a' && char <= 'z') {
            hasLowerCase = true;
        } else if (char >= '0' && char <= '9') {
            hasDigit = true;
        }
    }

    if (!(hasUpperCase && hasLowerCase && hasDigit)) {
        alert('Password must include at least one uppercase letter, one lowercase letter, and one digit.');
        return false;
    }

    if (password !== repassword) {
        alert('Passwords do not match.');
        return false;
    }


    return true;
}

