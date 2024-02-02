<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    body {
      background-color: #151515;
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
  background-color: black;
  color: black;
  transition: background-color 
    0.5s ease, color 0.5s ease;  
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
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.top,
.bottom {
    display: flex;
}

.bubble {
    position: relative;
    background-color: transparent;
    border-radius: 50%;
    width: 160px;
    height: 160px;
    overflow: hidden;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: flex-end; 
    align-items: center;
    margin: 20px;
    font-family: Arial, sans-serif;
    font-size: 16px;
    cursor: pointer;
    border: 3px solid rgb(69, 191, 189);
    box-sizing: border-box;
    margin-top: 300px;
}

.bubble img {
    width: 107%;
    height: 105%;
    object-fit: cover; 
    border-radius: 50%;
    margin-bottom: -1px;
}

.bubble::before {
    content: attr(data-content);
    position: absolute;
    background-color: #f1f1f1;
    border: 10px solid #ccc;
    border-radius: 5px;
    padding: 5px;
    color: #333;
    bottom: 0; 
    left: 0;
    right: 0;
    text-align: center;
    font-size: 14px;
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.3s ease;
}

.bubble:hover::before {
    visibility: visible;
    opacity: 1;
}

footer {
  background-color:transparent;
  color: white;
  padding: 1px;
  text-align: center;
  margin-top: 150px;
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
        <li><a style="color: red;" href="home.php">Dashboard</a></li>
        <li><a style="color: whitesmoke;" href="contact.php">Contact</a></li>
        <li><a style="color: orange;" href="home.php">Logout</a></li>
      </ul>
    </nav>
  </header>
    
      <div class="content">
      </div>
    
    
      <div class="container">
        <div class="top">
            <div class="bubble left" data-content="Isaac">
              <a href="contact2.php">
                <img border="0" alt="W3Schools" src="pic1.png" alt="Image 1"></a>
            </div>
            <div class="bubble right" data-content="Jacqueline">
              <a href="contact2.php">
              <img border="0" alt="W3Schools" src="pic2.jpg" alt="Image 2"></a>
            </div>
            <div class="bubble left" data-content="Noesa">
              <a href="contact2.php">
              <img border="0" alt="W3Schools" src="pic3.jpg" alt="Image 3"></a>
            </div>
            <div class="bubble right" data-content="Harvey">
              <a href="contact2.php">
              <img border="0" alt="W3Schools" src="pic4.jpg" alt="Image 4"></a>
            </div>
            <div class="bubble right" data-content="Kaye">
              <a href="contact2.php">
              <img border="0" alt="W3Schools" src="pic5.jpg" alt="Image 5"></a>
            </div>
            <div class="bubble right" data-content="John">
              <a href="contact2.php">
              <img border="0" alt="W3Schools" src="pic6.jpg" alt="Image 5"></a>
            </div>
        </div>
      <footer>
        <p>&copy; 2023 STUDENT LIFE. All rights reserved.</p>
      </footer>
    
      <script src="home.js"></script>
</body>
</html>