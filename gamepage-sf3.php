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
  <div class="bannerContainersf3">
    <div class="bannerWrapper">
      <img id="sf3logo" src="images/3rdsf-logo.png" alt="" width="450" style="margin-top: -2%" />
    </div>
  </div>
  <!--Game's original description, copy paste them from steam-->
  <p class="pGames">Fight for the future, SRTEET FIGHTER 3rd strike</p>
  <!--Useful web links-->
  <div class="webLinksContainer">
    <label class="miniTitle">Useful Websites</label>
    <div class="webLinksList">
      <ul>
        <!--the more the merrier-->
        <li>
          <a href="https://wiki.supercombo.gg/w/Street_Fighter_3:_3rd_Strike/FAQ" target="_blank">Street Fighter
            Wiki</a>
        </li>
        <li>
          <a href="https://streetfighter.fandom.com/wiki/List_of_moves_in_Street_Fighter_III:_3rd_Strike/"
            target="_blank">List of Moves</a>
        </li>
        <li>
          <a href="https://smashboards.com/threads/rpgs-complete-beginner-guide-to-street-fighter-3-third-strike.259785/"
            target="_blank">Beginner's Guide</a>
        </li>
      </ul>
    </div>
  </div>
  <!--Connect with the community-->
  <div class="comLinksContainer">
    <label class="miniTitle">Connect with the Community</label>
    <div class="comLinksList">
      <ul>
        <a href="https://www.reddit.com/r/sf3/" target="_blank"><img src="images/reddit-icon.png" alt=""
            width="80" /></a>
        <a href="https://steamcommunity.com/app/586200" target="_blank"><img src="images/steam-icon.png" alt=""
            width="80" /></a>
        <a href="https://www.twitch.tv/directory/category/street-fighter-iii-3rd-strike" target="_blank"><img
            src="images/twitch-icon.png" alt="" width="80" /></a>
      </ul>
    </div>
  </div>
  
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/790cbfd452.js" crossorigin="anonymous"></script>
</body>

</html>