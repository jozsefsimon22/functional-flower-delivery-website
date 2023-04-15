function checkPasswordMatches() {
    const pwdOne = document.forms["registration"]["password"].value;
    const pwdTwo = document.forms["registration"]["password_two"].value;
    if (pwdOne == pwdTwo) {
        document.getElementById("password_error").innerHTML = "";
        return true;
    }
    else {
        document.getElementById("password_error").innerHTML = "Passwords don't match!";
        return false;
    }
}

document.getElementById("password").addEventListener("input", function () {
    const minLength = 5;
    const pwd = document.getElementById("password").value;
    const pwdInfo = document.getElementById("password_info");

    if (pwd.length < minLength) {
        pwdInfo.style.display = "block";
    }
    else {
        pwdInfo.style.display = "none";
    }
});
