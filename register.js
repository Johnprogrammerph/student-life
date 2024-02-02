function validation() {
    var username = document.formfill.Username.value;
    var email = document.formfill.Email.value;
    var password = document.formfill.Password.value;
    var confirmPassword = document.formfill.ConfirmPassword.value;

    if (username === "") {
        document.getElementById("result").textContent = "Enter Username*";
        return false;
    } else if (username.length < 6) {
        document.getElementById("result").textContent = "Username must be at least six characters*";
        return false;
    } else if (email === "") {
        document.getElementById("result").textContent = "Enter your Email*";
        return false;
    } else if (password === "") {
        document.getElementById("result").textContent = "Enter your Password*";
        return false;
    } else if (password.length < 6) {
        document.getElementById("result").textContent = "Password must be at least six characters*";
        return false;
    } else if (confirmPassword === "") {
        document.getElementById("result").textContent = "Enter Confirm Password*";
        return false;
    } else if (confirmPassword !== password) {
        document.getElementById("result").textContent = "Passwords don't match*";
        return false;
    } else {
        openPopup();
        return false;
    }
}

function openPopup() {
    var popup = document.getElementById('popup');
    popup.style.transform = "translate(-50%, -50%) scale(1)";
    popup.style.visibility = "visible";
}

document.getElementById("popup").addEventListener("click", function (event) {
    if (event.target.tagName === "BUTTON") {
        closePopup();
    }
});

function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.transform = "translate(-50%, -50%) scale(0)";
    popup.style.visibility = "hidden";
}
