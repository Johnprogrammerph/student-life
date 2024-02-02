<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <form action="account.php" name="formfill" onsubmit="return validation()">
                <h2>Log In</h2>
                <p id="result"></p>
    
                <div class="input-box">
                    <i style="color: whitesmoke;" class='bx bx-envelope'></i>
                    <input type="Email" name="Email" placeholder="Email">
                </div>
    
                <div class="input-box">
                    <i style="color: whitesmoke;" class='bx bx-lock-alt'></i>
                    <input type="Password" name="Password" placeholder="Password">
                </div>
    
                <div class="button">
                    <input type="submit" class="btn" value="Login">
                </div>
                <div class="group">
                    <span><a href="login.php">Forget-Password</a></span>
                </div>
            </form>
        </div>
    </div>
        <script src="register.js"></script>
</body>
</html>
