<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "signup";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup'])) {
        // Handle sign-up logic
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // Check if the email already exists
        $checkEmailQuery = "SELECT id FROM users WHERE email = '$email'";
        $checkEmailResult = $conn->query($checkEmailQuery);

        if ($checkEmailResult->num_rows > 0) {
            echo "Email already exists. Please choose a different email.";
        } else {
            // Email doesn't exist, proceed with sign-up
            $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "Account created successfully!";
                // You can redirect the user or perform other actions here
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } elseif (isset($_POST['signin'])) {
        // Handle sign-in logic
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT id, name, email, password FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Successful sign-in
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header("Location: prototype2.php");
                exit();
            } else {
                echo "Incorrect email or password!";
            }
        } else {
            echo "Email does not exist!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
        
        * {
            box-sizing: border-box;
        }
        
        body {
            background:#222;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }
        
        h1 {
            font-weight: bold;
            margin: 0;
    
        }
        
        h2 {
            text-align: center;
        }
        
        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }
        
        span {
            font-size: 12px;
        }
        
        a {
            color: red;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }
        
        button {
            border-radius: 20px;
            border: 1px solid #333;
            background-color: #333;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }
        
        button:active {
            transform: scale(0.95);
        }
        
        button:focus {
            outline: none;
        }
        
        button.ghost {
            background-color: transparent;
            border-color: #333;
        }
        
        form {
            background-color: rebeccapurple;
            color: #222;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }
        
        input {
            background-color: #fff;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }
        
        .container {
            background-color: #333;
            border-radius: 10px;
              box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                    0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }
        
        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }
        
        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }
        
        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }
        
        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }
        
        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }
        
        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }
        
        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }
        
        .container.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }
        
        .overlay {
            background: #222;
            background: -webkit-linear-gradient(to right, #222, #222);
            background: linear-gradient(to right, #222, #222);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: white;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
              transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }
        
        .container.right-panel-active .overlay {
              transform: translateX(50%);
        }
        
        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }
        
        .overlay-left {
            transform: translateX(-20%);
        }
        
        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }
        
        .overlay-right {
            right: 0;
            transform: translateX(0);
        }
        
        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }
        
        .social-container {
            margin: 20px 0;
        }
        
        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
        
        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }
        
        footer p {
            margin: 10px 0;
        }
        
        footer i {
            color: red;
        }
        
        footer a {
            color: #3c97bf;
            text-decoration: none;
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
            margin-left: -110px;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 50px;
            border: 2px solid #3498db; 
        }

        .modal-content {
            text-align: center;
        }

        .close-modal {
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
            margin-right: -5px;
            width: 80px;
            height: 40px;
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

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h1 style="color:#fff;">Register Account</h1>

                <input type="text" name="name" placeholder="Name" required/>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="home2.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h1 style="color:#fff;">Sign in</h1>

                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <a href="database_connection.php">Forgot your password?</a>
                <button type="submit" name="signin">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 style="color:#fff;">Welcome Back!</h1>
                    <p style="color:#fff;">To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn" style="color:#fff;">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1 style="color:#fff;">Hello, Friend!</h1>
                    <p style="color:#fff    ;">Enter your personal details and start the journey with us</p>
                    <button class="ghost" id="signUp" style="color:#fff;">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <img src="hello-removebg-preview.png" alt="Floating Image" class="floating-image" onclick="openModal()">

        <div class="modal" id="myModal">
            <div class="modal-content">
                <p>Hey user 😀 Don't have an account yet?<br>
                    Get ready to embark on an educational<br>
                    adventure where curiosity knows no bounds.<br> 
                    We're thrilled to have you here.<br>
                         Register Now!</p>
                    <button class="close-modal"></button>
            </div>
        </div>

    <footer>
    <p>&copy; 2023 STUDENT LIFE. All rights reserved.</p>
    </footer>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
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
