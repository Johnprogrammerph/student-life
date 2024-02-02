<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    background: url(rami-al-zayat-w33-zg-dNL4-unsplash.jpg) no-repeat;
    background-size: 100% 100%;
    min-height: 100vh;
    width: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

header {
  background-color:transparent;
  color: #fff;
  display: flex;
  justify-content: space-between;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
  margin-top: 30px;

}

.header-content {
  margin-right: 50px;
  display:flex;
  align-items: center;
}

h1 {
  margin-left: 50px;
}

.navbar {
  background-color: transparent;
  font-size: 20px;
  list-style-type: none;
  overflow: hidden;
  text-align: right;
}

.navbar li {
  display: inline-block;
  margin-right: 20px;
}

.navbar li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar li a:hover {
  border-radius: 30px;
  background-color: lightslategrey;
  color: black;
  transition: background-color 0.5s ease, color 0.5s ease;  
}

.menu-toggle {
  margin-top: 20px;
  display: none;
  flex-direction: column;
  cursor: pointer;
  position: fixed;
  top: 10px;
  left: 10px;
  z-index: 100;
}

.menu-toggle:hover {
  box-shadow: 0px 0px 50px black;
}

/* Add the following styles for the contact form */
.contact-form {
  max-width: 400px;
  margin: 50px auto; 
  padding: 50px;
  border-radius: 4px; 
  margin-top: 200px;
}

.contact-form label {
  color: #fff;
  display: block;
  margin-bottom: 10px;
}

.contact-form input, .contact-form textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
}

.contact-form button {
  background-color: transparent;
  color: white;
  padding: 10px 20px;
  border-color: #fff;
  border-radius: 4px;
  cursor: pointer;
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
    animation: colorChange 1s infinite;
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

/* Navbar */
.navbar {
    background-color: transparent;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
  }

  .navbar a {
    color: #fff;
    margin: 0 10px;
    text-decoration: none;
  }

  /* Sections */
  .section {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
<body>
  <header>
    <div class="header-content">
      <h1>Student Life</h1>
      <div class="menu-toggle">&#9776;</div>
    </div>

    <nav>
      <ul class="navbar">
        <li><a style="color: red;" href="home.php">Home</a></li>
       
        <li><a style="color: orange;" href="database_connection.php">Account</a></li>
      </ul>
    </nav>
  </header>

      <!-- Add the contact form -->
      <div class="contact-form">
        <div class="form-box">
        <form method="post" action="submit_form.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
                <input type="submit" value="Send Message" class="btn btn-primary">
            </form>
      </div>
      </div>
</body>
</html>
