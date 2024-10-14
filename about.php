<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link rel="stylesheet" href="about.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar">
    <div class="navbar__container">
      <div class="navbar__logo">
        <img src="ENGINEED LOGO.png" alt="pic" id="navbar__logo" />
      </div>
      <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar__menu">
        <li class="navbar__item">
          <a href="index.php" class="navbar__links"> Home </a>
        </li>
        <li class="navbar__item">
          <a href="about.php" class="navbar__links"> About </a>
        </li>
        <li class="navbar__item">
          <a href="researchers.php" class="navbar__links">The Researchers</a>
        </li>
        <li class="navbar__btn">
          <a href="#loginPopup" class="button" onclick="openLoginPopup(); return false;">Log In</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--MAIN-->

  <div class="main">
    <div class="main__container">
      <div class="main__content">
        <h1>EngiNeed</h1>
        <p>Better and Safer Learning Space</p>
        <p>This website was developed by a dedicated research team under the guidance of our research <br>adviser, Ma’am Aireen Catuiza. The project is led by Jovel Mae C. Escaño, with key contributions <br>from team members Nico Angelo I. Bugna, Celine B. Bragado, and Jaira Moira L. Del Mundo. <br><br>
        Engineed is designed to serve as a communication bridge between students and <br>engineers, ensuring that essential school facilities like electric fans and other equipment are promptly <br>repaired. Our mission is to streamline the process, making it easier for everyone to contribute to <br>a better learning environment.
        </p>
      </div>
    </div>
  </div>
<div>

<!--CONTACT-->

<div class="contact">
  <h1>Contact Us</h1>
  <div class="contact__container">
    <div class="contact__content__1">
      <h2>Send us an Email</h2>
      <ul>
        <li>teamengineed@gmail.com</li>
        <li>nicoangeloilustre@gmail.com</li>
        <li>jaira.delmundo.320401@gmail.com</li>
        <li>celine.bragado.320401@gmail.com</li>
        <li>escanojovelmae@gmail.com</li>
      </ul>
    </div>

  <!--FORM-->
    <div class="contact__content__2">
      <h2>Send us a message</h2>
      <form action="Private Data/userdata.php" method="post">
        <label for="name" placeholder= "Dela Cruz, Juan Alonso">Full Name *</label>
        <input type="text" id="name" name="name" required>

        <label for="email" placeholder="teamengineed@gmail.com">Email Address *</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message *</label>
        <textarea id="message" name="message" required> </textarea>

        <button type="submit">SEND MESSAGE</button>

      </form>
    </div>
  </div>
</div>
            
<!--LOGIN POPUP-->
<div class="popup" id="loginPopup">
    <div class="popup-content">
      <span class="close-btn" onclick="closeLoginPopup()">&times;</span>
      <h2>Log In</h2>
      <div class="form-element">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Enter Email">
      </div>
      <div class="form-element">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter Password">
      </div>
      <div class="form-element">
        <input type="checkbox" id="remember-me">
        <label for="remember-me">Remember me</label>
      </div>
      <button class="login-btn">Log In</button>
    </div>
  </div>

  <script src="app.js"></script>
</body>
</html>