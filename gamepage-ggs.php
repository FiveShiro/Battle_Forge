<?php
date_default_timezone_set('Asia/Manila');
include "commentfunction.php";

$dates = isset($_SESSION['sessionDates']) ? $_SESSION['sessionDates'] : [];
$comments = isset($_SESSION['sessionComments']) ? $_SESSION['sessionComments'] : [];
$usernames = isset($_SESSION['sessionUsernames']) ? $_SESSION['sessionUsernames'] : [];
?>
<style>
  button {
    color: black;
  }

  textarea {
    color: black;
  }
</style>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="script.js" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Deca" />
</head>

<body>
<div class="navcontainer">
      <nav class="nav fadeIn" id="nav">
        <a href="homepage.php"
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
          <li class="closeOption"><a href="homepage.php">Homepage</a></li>
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
  <!--Image banners-->
  <div class="bannerContainerggs">
    <div class="bannerWrapper">
      <img id="tk8logo" src="images/GGStrive_Logo.png" alt="" />
    </div>
  </div>
  <!--Game's original description, copy paste them from steam-->
  <p class="pGames">
    JOIN THE CRUSADE OF THE HOLY KNIGHTS AGAINST THE GEARS, FOR HUMANITY! 
  </p>
  <!--Useful web links-->
  <div class="webLinksContainer">
    <label class="miniTitle">Useful Websites</label>
    <div class="webLinksList">
      <ul>
        <!--the more the merrier-->
        <li><a href="https://www.guiltygear.com/ggst/en/">Guiltygearstrive</a></li>
        <li><a href="https://en.bandainamcoent.eu/guilty-gear/guilty-gear-strive">bandainamcoent</a></li>
        <li><a href="https://www.thegamer.com/guilty-gear-strive-multiplayer-online-mode-details/">thegamer</a></li>
      </ul>
    </div>
  </div>
  <!--Connect with the community-->
  <div class="comLinksContainer">
    <label class="miniTitle">Connect with the Community</label>
    <div class="comLinksList">
      <ul>
        <li><a
            href="https://www.communitygaming.io/tournament/the-gatling-war-guilty-gear-strive-day-1-tournament">communitygaming</a>
        </li>
        <li><a
            href="https://www.facebook.com/events/d41d8cd9/community-throwdown-guilty-gear-strive-711/405745747343704/">facebook</a>
        </li>
        <li><a
            href="https://wccftech.com/guilty-gear-strive-community-makes-call-for-action-against-deplorable-online-conditions/">wccftech</a>
        </li>
      </ul>
    </div>
  </div>
 
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/790cbfd452.js" crossorigin="anonymous"></script>
</body>

</html>