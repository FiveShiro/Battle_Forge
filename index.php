<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="script.js" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Jost"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lexend+Deca"
    />
  </head>

  <body>
    <video autoplay muted loop id="myVideo">
      <source src="videos/videobg.mp4" type="video/mp4" />
    </video>
    <div id="header">
      <div class="navcontainer">
        <nav class="nav" id="nav">
          <img id="logo" src="images/logo.png" class="logo" />
          <ul>
            <li><a href="main_login.php">Tekken 8</a></li>
            <li><a href="main_login.php">SFVI</a></li>
            <li><a href="main_login.php">SFIII</a></li>
            <li><a href="main_login.php">GBFVR</a></li>
            <li><a href="main_login.php">KOFXV</a></li>
            <li><a href="main_login.php">GGS</a></li>
            <li><a href="main_login.php">UNIB2</a></li>
            <li class="closeOption"><a href="#">Close</a></li>
          </ul>
          <div class="navMenu">
            <i class="fa-solid fa-bars"></i>
          </div>
        </nav>
      </div>
      <div class="container">
        <div class="header-text">
          <h1><span style="color: #ff005c">BATTLE</span>forge</h1>
          <h2>Forging better players</h2>
          <p>
            BATTLEforge is a culmination of information of games from my hobbies built to support me or those who want to usr my site. :P
          </p>
        </div>
      </div>
    </div>
    <div class="signupContainer">
      <a href="register.html"> <label id="signuplbl">Sign Up</label></a>
    </div>
    <div class="signinlblContainer">
      <label class="signinLbl"
        >Already have an account?
        <a href="main_login.php">
          <span style="color: #ff005c">Sign in here</span></a
        ></label
      >
    </div>

    <script src="script.js"></script>
    <script
      src="https://kit.fontawesome.com/790cbfd452.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>