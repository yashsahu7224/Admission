function formSwitch(form) {
    if (form === 'login') {
        document.querySelector('.register_form').style.visibility = 'hidden'
        document.querySelector('.login_form').style.visibility = 'visible'
    } else if (form === 'register') {
        document.querySelector('.register_form').style.visibility = 'visible'
        document.querySelector('.login_form').style.visibility = 'hidden'
    }
}
// Sign Up Form Validation
// First Name Validation
function validateForm() {
    var firstName = document.forms["myForm"]["firstName"].value;
    if (/[0-9]/.test(firstName)) {
        alert("First name must not contain any digit")
        return false;
    }
    var firstLetter = firstName.charAt(0);
    if (!/[A-Z]/.test(firstLetter)) {
        alert("First letter of first name must start with capital letter");
        return false;
    }

    // Last Name Validation
    var lastName = document.forms["myForm"]["lastName"].value;
    if (/[0-9]/.test(lastName)) {
        alert("Last name must not contain any digit")
        return false;
    }
    var lastLetter = lastName.charAt(0);
    if (!/[A-Z]/.test(lastLetter)) {
        alert("First letter of last name must start with capital letter");
        return false;
    }

    // Password Validation
    var password = document.forms["myForm"]["password"].value;
    if (password.length <= 8) {
        alert("password must be atleast 8 character long")
        return false;
    }
    if (!/[A-Z]/.test(password)) {
        alert("password must contain uppercase")
        return false;
    }
    if (!/[a-z]/.test(password)) {
        alert("password must conatin lowercase")
        return false;
    }
    if (!/[0-9]/.test(password)) {
        alert("password must contain a digit")
        return false;
    }
    if (!/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)) {
        alert("password must contain a special character")
        return false;
    }

    // Contact No. Validation
    var contact = document.forms["myForm"]["contact"].value;
    if (contact.length < 10) {
        alert("contact no. should be of 10 digits")
        return false;
    }
    if (contact.length > 10) {
        alert("contact no. should be of 10 digits")
        return false;
    }
    if (/[A-Z]/.test(contact)) {
        alert("contact no. should not contain any alphabet")
        return false;
    }
    if (/[a-z]/.test(contact)) {
        alert("contact no. should not contain any alphabet")
        return false;
    }
    return true;
}
// Login Form Validation
function logForm() {
    var password = document.forms["loginForm"]["password"].value;
    if (password.length < 8) {
        alert("password must be 8 character long")
        return false;
    }
    if (!/[A-Z]/.test(password)) {
        alert("password must contain uppercase")
        return false;
    }
    if (!/[a-z]/.test(password)) {
        alert("password must conatin lowercase")
        return false;
    }
    if (!/[0-9]/.test(password)) {
        alert("password must contain a digit")
        return false;
    }
    if (!/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)) {
        alert("password must contain a special character")
        return false;
    }
}