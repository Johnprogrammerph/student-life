<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  
    body {
    background: url(Grey\ Modern\ Professional\ Business\ Project\ Presentation.png) no-repeat;
    background-size: 100% 100%;
    min-height: 100vh;
    width: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

header {
  background-color:gainsboro;
  color: black;
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
  font-weight: bold;
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
  background-color: gray;
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

/*----------------------------------------------*/


body {
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f2f2f2;
    }
    
    .landing-page {
      max-width: 800px;
      background-color: white;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 5px;
    }
    
    .article-wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 20px;
      animation: slideRight infinite 30s linear;
    }

    @keyframes slideRight {
      0% {
        transform: translateX(0);
      }
      50% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(0);
      }
    }
    
    .article {
      width: calc(20% - 10px);
      margin-bottom: 20px;
      position: relative;
      overflow: hidden;
    }
    
    .article img {
      width: 100%;
      height: auto;
      transition: transform 0.3s ease;
    }
    
    .article:hover img {
      transform: scale(1.1);
    }
    
    .article .info {
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 10px;
      background-color: rgba(0, 0, 0, 0.8);
      color: white;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .article:hover .info {
      opacity: 1;
    }
    
    .article .info span {
      display: block;
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
            <li><a style="color: black;" href="maindashboard.html">Home</a></li>
            <li><a style="color: black;" href="About.html">About</a></li>
            <li><a style="color: black;" href="article.html">Article</a></li>
            <li><a style="color: black;" href="contact.html">Contact</a></li>
            <li><a style="color: black;" href="Register.html">Account</a></li>
          </ul>
        </nav>
      </header>

      <div class="article-wrapper">
        <div class="article">
          <a href="SocialMedia-BSIT-Review.html">
          <img src="52b7f29a4527b2dfa7c4bbb40b2c0d58.jpg" alt="Image 1"></a>
          <div class="info">
            <span>Social Media Use and Well-being Among BSIT University Students: A Systematic Review
            </span>
          </div>
        </div>
        <div class="article">
          <a href="SocialMedia-Filipino-College.html">
          <img src="andrew-neel-ute2XAFQU2I-unsplash.jpg" alt="Image 2"></a>
          <div class="info">
            <span>Effects of Excessive Social Media Use on Academic Performance and Well-being of Filipino College Students
            </span>
          </div>
        </div>
        <div class="article">
          <a href="SocialMedia-Filipino-Reading.html">
          <img src="c6ca7f852c3accb27b5c3786a5b51f4d.jpg" alt="Image 3"></a>
          <div class="info">
            <span>Exploring Social Media Use of Filipino Learners: How it Impacts Reading Attitudes and Competence
            </span>
          </div>
        </div>
        <div class="article">
          <a href="SocialMedia-GAS-Academics.html">
          <img src="4ad24e981812d2ecfae0a01bd1b3ddf4.jpg" alt="Image 4"></a>
          <div class="info">
            <span>Effects of Social Media on Academic Performance and Behavior of GAS students: Toward a Guide
            </span>
          </div>
        </div>
        <div class="article">
          <a href="SocialMedia-MentalHealth-Academics.html">
          <img src="09166c38fd1598f3d44be6a6639911d4.jpg" alt="Image 5"></a>
          <div class="info">
            <span>The Effect of Social Media on Mental Health and Academic Performance
            </span>
          </div>
        </div>
      </div>

</body>
</html>