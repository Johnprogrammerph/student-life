<?php
// Assuming you have a MySQL database, replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "databasereglo";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["Username"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Your CSS Styles */
        @import url('https://fonts.googleapis.com/css2?family=Crimson+Pro&family=Literata');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }

        body {
            background: url(alexander-shatov-mr4JG4SYOF8-unsplash.jpg) no-repeat;
            background-size: 100% 100%;
            min-height: 100vh;
            width: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
        }

        .form-box {
            position: relative;
            width: 400px;
            height: 550px;
            border: 2px solid transparent;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: center;
            align-items: center;
            animation: colorChange 2s infinite;
        }

        .form-box h2 {
            color: #fff;
            text-align: center;
            font-size: 32px;
        }

        .form-box .input-box {
            position: relative;
            margin: 30px 0;
            width: 319px;
            border-bottom: 2px solid #fff;
        }

        .form-box .input-box input {
            width: 100%;
            height: 45px;
            background: transparent;
            border: none;
            outline: none;
            padding: 0 20px 0 5px;
            color: #fff;
            font-size: 16px;
        }

        i {
            position: absolute;
            top: 13px;
            right: 0;
        }

        input::placeholder {
            color: #fff;
        }

        .btn {
            font-size: 17px;
            color: #fff;
            background: transparent;
            width: 100%;
            height: 50px;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 3px 0 10px rgba(0, 0, 0, 0.1);
        }

        .group {
            display: flex;
            justify-content: space-between;
        }

        .group span a {
            color: #fff;
            position: relative;
            top: 10px;
            font-weight: 500;
        }

        .group a:focus {
            text-decoration: underline;
        }

        #result {
            color: red;
            font-weight: 600;
            position: relative;
            top: 25px;
        }

        @keyframes colorChange {
            0% {
                border-color: rgb(255, 0, 0);
            }

            50% {
                border-color: rgb(0, 255, 0);
            }

            100% {
                border-color: rgb(137, 207, 235);
            }

            150% {
                border-color: rgb(255, 255, 255);
            }
        }

        .popup {
            width: 400px;
            background-color: #fff;
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform .4s, visibility .4s;
            visibility: hidden;
            text-align: center;
            padding: 0 30px 30px;
            height: 330px;
            color: #000;
        }

        .popup ion-icon {
            color: greenyellow;
            font-size: 50px;
            margin-top: 40px;
        }

        .popup h2 {
            margin-top: 40px;
        }

        .popup button {
            font-size: 18px;
            width: 100%;
            background: greenyellow;
            padding: 10px 0;
            outline: none;
            margin-top: 90px;
            border: none;
            color: #fff;
            cursor: pointer;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .popup a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 2px;
        }

        .open-slide {
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
            visibility: visible;
        }

        .welcome-container {
            position: absolute;
            top: 20px;
            left: auto;
            margin-left: 10px;
            padding: 15px;
            background-color: transparent;
            border: 2px solid #3498db;
            border-radius: 10px;
            animation: floatAnimation 4s infinite, colorChange 2s infinite;
            font-size: 19px;
            font-style: inherit;
        }

        @keyframes floatAnimation {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes colorChange {
            0% {
                border-color: rgb(255, 0, 0);
                color: rgb(255, 0, 0);
            }
            50% {
                border-color: rgb(0, 255, 0);
                color: rgb(0, 255, 0);
            }
            100% {
                border-color: rgb(137, 207, 235);
                color: rgb(137, 207, 235);
            }

        }

        .floating-image {
            position: fixed;
            bottom: auto;
            margin-top: 420px;
            left: -25px;
            width: 300px;
            height: 300px;
            cursor: pointer;
            animation: floatAnimation 4s infinite;
        }

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #3498db; 
        }

        .modal-content {
            text-align: center;
        }

        .close-modal {
            cursor: pointer;
            color: #3498db;
            font-weight: bold;
            font-size: 14px;
            margin-top: 10px;
            width: 80px;
            height: 40px;
            border-radius: 7px;
        }

    </style>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="welcome-container">
        Welcome to our Registration Page
        <span class="color-changing-emoji">🚀</span>
    </div>
    <div class="container">
        <div class="form-box">
            <form action="" name="formfill" onsubmit="return validation()">
                <h2>Register</h2>
                <p id="result">head</p>
                <div class="input-box">
                    <i style="color: whitesmoke;" class='bx bx-user'></i>
                    <input type="text" name="Username" placeholder="Username">
                </div>

                <div class="input-box">
                    <i style="color: whitesmoke;" class='bx bx-envelope'></i>
                    <input type="text" name="Email" placeholder="Email">
                </div>

                <div class="input-box">
                    <i style="color: whitesmoke;" class='bx bx-lock-alt'></i>
                    <input type="password" name="Password" placeholder="Password">
                </div>

                <div class="input-box">
                    <i style="color: whitesmoke;" class='bx bx-lock-alt'></i>
                    <input type="password" name="ConfirmPassword" placeholder="ConfirmPassword">
                </div>
                <div class="button">
                    <input type="submit" class="btn" value="Register">
                </div>
                <div class="group">
                    <span><a href="login.php">Login</a></span>
                </div>
            </form>
        </div>
        <div class="popup" id="popup">
            <ion-icon name="checkbox-outline"></ion-icon>
            <h2>Thank you!!!</h2>
            <p>Your Registration Successfully. Thanks!</p>
            <a href="login.php"><button>OK</button></a>
        </div>
        <img src="hello-removebg-preview.png" alt="Floating Image" class="floating-image" onclick="openModal()">

        <div class="modal" id="myModal">
            <div class="modal-content">
                <p>Hey user 😀 Don't have an account yet?<br>
                    Get ready to embark on an educational<br>
                    adventure where curiosity knows no bounds.<br> 
                    We're thrilled to have you here.<br>
                    Register Now!</p>
                    <button class="close-modal" style="background-color: #3498db; color: #fff;">Close</button>
            </div>
        </div>
    </div>
    <script>
        // Your JavaScript code
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
        function openModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'block';
        }

        function closeModal() {
            var modal = document.getElementById('myModal');
            modal.style.display = 'none';
        }
        document.querySelector(".close-modal").addEventListener("click", function () {
            closeModal();
        });
    </script>
</body>

</html>
