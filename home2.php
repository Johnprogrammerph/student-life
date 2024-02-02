<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="random.css">
    <title>NEISM STUDENT</title>
    
  </head>
  <body>
     <header>
    <div class="header-content">
      <h1>Student Life</h1>
      <div class="menu-toggle">&#9776;</div>
    </div>

    <nav>
      <ul class="navbar">
        <li><a style="color: red;" href="#mainDashboard">Home</a></li>
        <li><a style="color: skyblue;" href="#about">About</a></li>
        <li><a style="color: lightgreen;" href="#article">Article</a></li>
        <li><a style="color: whitesmoke;" href="contact.php">Contact</a></li>
        <li><a style="color: yellow;" href="account.php">Account</a></li>
        <li><a style="color: orange;" href="home.php">Logout</a></li>
      </ul>
    </nav>
  </header>
    </nav>

    
    <div id="mainDashboard" class="section">
      <div class="container">
        <img class="hover-image" src="smartphonesoc.png" alt="Image" >
        <div class="content">
    
      <h2>"Navigating the <a style="color: palevioletred;">Digital</a>
         Tide: Illuminating the <br>Impact of Internet and <a style="color:red">Social</a> 
         <a style="color: orange;">Media</a> on <a style="color: blue">Student</a> Awareness."</h2>
    
    <h3>Welcome to Student Life, where we explore the profound influence of the digital world on student life.</h3>
    </div>
    </div>    </div>

    <div id="about" class="section">
      <section class="about">
        <div class="main">
            <img src="download__1_-removebg-preview.png" width="155" height="155">
            <img src="download__2_-removebg-preview.png"  width="155" height="155">

            <div class="all-text">
                <h1>About Us</h1>
                <p>Welcome to Student Life, where we delve into the intricate 
                    relationship between students and the digital landscape. Our platform 
                    is dedicated to exploring the effects of the Internet and social media on 
                    academic, mental, and social aspects of student life.</p>
                <div class="btn">
                    <button type="button" class="btn2" onclick="openPopup('learnMorePopup')">Learn more</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Pop-up for Learn More -->
    <div id="learnMorePopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('learnMorePopup')">&times;</span>
            <p>At the heart of our mission lies a comprehensive study conducted at 
                St. Vincent De Ferrer College, Inc., focusing on the experiences of  
                students. This research seeks to uncover the challenges and benefits 
                presented by digital technologies, guiding strategies for responsible 
                digital engagement and promoting a healthy balance between online and 
                offline activities.<br>

                Join us on a journey through the complexities of information in the age 
                of social media, highlighting the importance of critical thinking. Our 
                commitment is to provide valuable insights, empowering students to make 
                informed choices and maintain a harmonious relationship with the digital 
                world.

            </p>
        </div>
    </div>

    <!-- Pop-up for Fact Checking -->
    <div id="factCheckingPopup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('factCheckingPopup')">&times;</span>
            <p></p>
        </div>
    </div>

    <style>
        body {
            background: url("black.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    <script>
        function openPopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.display = "block";
        }

        function closePopup(popupId) {
            var popup = document.getElementById(popupId);
            popup.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target.className === "popup") {
                event.target.style.display = "none";
            }
        };
    </script>
    </div>



    <div id="article" class="section">
      <h2> </h2>
   
      <div class="slider">
        <div class="slider-track">
            <div class="slide">
              <a href="SocialMedia-BSIT-Review.php">
                <img src="52b7f29a4527b2dfa7c4bbb40b2c0d58.jpg" alt="Image 1"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-Filipino-College.php">
                <img src="andrew-neel-ute2XAFQU2I-unsplash.jpg" alt="Image 2"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-Filipino-Reading.php">
                <img src="c6ca7f852c3accb27b5c3786a5b51f4d.jpg" alt="Image 3"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-GAS-Academics.php">
                <img src="4ad24e981812d2ecfae0a01bd1b3ddf4.jpg" alt="Image 4"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-MentalHealth-Academics.php">
                <img src="09166c38fd1598f3d44be6a6639911d4.jpg" alt="Image 5"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-BSIT-Review.php">
                <img src="52b7f29a4527b2dfa7c4bbb40b2c0d58.jpg" alt="Image 1"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-Filipino-College.php">
                <img src="andrew-neel-ute2XAFQU2I-unsplash.jpg" alt="Image 2"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-Filipino-Reading.php">
                <img src="c6ca7f852c3accb27b5c3786a5b51f4d.jpg" alt="Image 3"></a>
            </div>
            <div class="slide">
                <a href="SocialMedia-GAS-Academics.php">
                <img src="4ad24e981812d2ecfae0a01bd1b3ddf4.jpg" alt="Image 4"></a>
            </div>
            <div class="slide">
              <a href="SocialMedia-MentalHealth-Academics.php">
                <img src="09166c38fd1598f3d44be6a6639911d4.jpg" alt="Image 5"></a>
            </div>
        </div>
    </div>

  </div>
    </div>
    <footer>
      <p>&copy; 2023 STUDENT LIFE. All rights reserved.</p>
    </footer>
    <script src="random.js"></script>
  </body>
</html>