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
    </div>v>
    </div>
  <!--Image banners-->
  <div class="bannerContainerkof">
    <div class="bannerWrapper">
      <img class="koflogo" src="images/koflogo.png" alt="" />
    </div>
  </div>
  <!--Game's original description, copy paste them from steam-->
  <p class="pGames">
   FIGHT YOUR WAY TO THE GLORY OF THE CROWN! BE THE KING OF FIGHTERS!
  </p>
  <!--Useful web links-->
  <div class="webLinksContainer">
    <label class="miniTitle">Useful Websites</label>
    <div class="webLinksList">
      <ul>
        <!--the more the merrier-->
        <li><a href="https://kofallstar.netmarble.com/en">netmarble</a></li>
        <li>
          <a href="https://www.snk-corp.co.jp/us/games/kof-portal/">snk-corp</a>
        </li>
        <li><a href="https://atlus.com/kofxiv/">atlus</a></li>
      </ul>
    </div>
  </div>
  <!--Connect with the community-->
  <div class="comLinksContainer">
    <label class="miniTitle">Connect with the Community</label>
    <div class="comLinksList">
      <ul>
        <li>
          <a href="https://www.nexusmods.com/thekingoffighters15">nexusmods</a>
        </li>
        <li>
          <a href="https://forum.netmarble.com/kofg_en/view/19/37213">netmarble</a>
        </li>
        <li>
          <a href="https://www.eventhubs.com/news/2022/apr/12/kof15-universal-change-request/">eventhubs</a>
        </li>
      </ul>
    </div>
  </div>
    
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/790cbfd452.js" crossorigin="anonymous"></script>
</body>

</html>