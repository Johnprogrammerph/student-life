<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="About.html">
    <link rel="stylesheet" href="About.css">
    <title>NEISM</title>
</head>
<body>

    <header>
        <div class="header-content">
          <h1>Student Life</h1>
          <div class="menu-toggle">&#9776;</div>
        </div>
    
        <nav>
          <ul class="navbar">
            <li><a style="color: red;" href="maindashboard.html">Home</a></li>
            <li><a style="color: skyblue;" href="About.html">About</a></li>
            <li><a style="color: lightgreen;" href="article.html">Article</a></li>
            <li><a style="color: whitesmoke;" href="contact.html">Contact</a></li>
            <li><a style="color: orange;" href="Register.html">Account</a></li>
          </ul>
        </nav>
      </header>


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
</body>
</html>
