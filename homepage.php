<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>'s Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="script.js" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Deca" />
</head>

<body class="homepage">
  <!--Copy Navigation bar from here-->
  <div class="navcontainer">
      <nav class="nav fadeIn" id="nav">
        <a href="index.html"
          ><img id="logo" src="images/logo.png" class="logo"
        /></a>
        <ul>
          <li><a href="gamepage-tk8.php">Tekken 8</a></li>
          <li><a href="gamepage-sf6.php">SFVI</a></li>
          <li><a href="gamepage-sf3.php">SFIII</a></li>
          <li><a href="gamepage-GBFRVR.php">GBFVR</a></li>
          <li><a href="gamepage-kof.php">KOFXV</a></li>
          <li><a href="gamepage-ggs.php">GGS</a></li>
          <li><a href="gamepage-UNIB.php">UNIB2</a></li>
          <li class="closeOption"><a href="#">Close</a></li>
          <li class="closeOption"><a href="#">Homepage</a></li>
          <li class="closeOption"><a href="Logout.php">Logout</a></li>
        </ul>
        <div class="dropdown">
          <div class="dropdown-btn">
            <img id="userAvatar" src="images/dd.png" alt="your avatar" />
          </div>
          <div class="dropdown-content">
            <a href="homepage.php">Homepage</a>
            <a href="Logout.php">Logout</a>
          </div>
        </div>
        <div class="navMenu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </nav>
    </div>
    </div>
  <!--to here-->
  <div class="profileAvatar">
    <div class="avatarContainer">
      <img id="avatarImg" src="images/avatar2.png" alt="your avatar" />
      <input type="file" id="avatarInput" accept="image/*" style="display: none" />
      <input type="hidden" name="next_page" value="avatar">
      <button class="changeAvatarBtn" id="changeAvatarBtn">
        Change Avatar
      </button>
      </div >
    </div >
    <div id="pfusnm" class="profileUsername">
      <h1 class="homepageh1">
        Hi
        <span id="username" style="color: #ff005c">
          <?php
          echo $_SESSION["Username"]
            ?> </span
        >!
      </h1>
    </div>
    <div class="homepageDesc">
      <p>
        Welcome to the BATTLEforge homepage! See below the current EVO lineup.
      </p>
    </div>

    <section>
      <div class="homepageBody">
        <div class="showcaseh1">
          <h1 style="color: #ff005c">
            CHECK OUT THE CURRENT EVO 2024 LINE-UP.
          </h1>

          <div class="showcase">
            <a href="gamepage-tk8.html"
              ><img class="enlarge" src="images/TEKKEN.jpeg" alt="" width="350"
            /></a>
            <a href="gamepage-sf6.html"
              ><img
                class="enlarge"
                src="images/streetfighter.jpeg"
                alt=""
                width="350"
                height="450"
            /></a>
            <a href="gamepage-sf3.html"
              ><img
                class="enlarge"
                src="images/3rdstrike.jpg"
                alt=""
                width="350"
                height="400px"
            /></a>
            <a href="#"
              ><img
                class="enlarge"
                src="images/gbfvr.avif"
                alt=""
                width="350"
                height="450"
            /></a>
            <a href="#"
              ><img
                class="enlarge"
                src="images/kof.webp"
                alt=""
                width="350"
                height="450"
            /></a>
            <a href="#"
              ><img class="enlarge" src="images/guilty.jpg" alt="" width="335"
            /></a>
            <a href="#"
              ><img
                class="enlarge"
                src="images/UnderNightGameCover.jpg"
                alt=""
                width="325"
            /></a>
          </div>
        </div>
      </div>
    </section>

    <script src="script.js"></script>
      <script src="https://kit.fontawesome.com/790cbfd452.js" crossorigin="anonymous"></script>
</body>

</html>