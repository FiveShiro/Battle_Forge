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
  <div class="bannerContainersf6">
    <div class="sf6">
      <img id="tk8logo" src="images/sf6_logo.webp" alt="" width="1000" style="filter: brightness(1000%)" />
    </div>
  </div>
  <!--Game's original description, copy paste them from steam-->
  <p class="pGames">YOUR MOMENT/YOUR FIGHT, STREET FIGHTER 6</p>
  <!--Useful web links-->
  <div class="webLinksContainer">
    <label class="miniTitle">Useful Websites</label>
    <div class="webLinksList">
      <ul>
        <!--the more the merrier-->
        <li>
          <a href="https://www.ign.com/wikis/street-fighter-6/Essential_Tips_and_Tricks" target="_blank">Essential Tips
            and Tricks</a>
        </li>
        <li>
          <a href="https://fightrise.com/guides-tutorials/" target="_blank">Guides & Tutorials: A Collection</a>
        </li>
        <li>
          <a href="https://www.ign.com/wikis/street-fighter-6/Beginner's_Guide_-_Basics_and_Features"
            target="_blank">Beginner's Guide - Basics and Features</a>
        </li>
      </ul>
    </div>
  </div>
  <!--Connect with the community-->
  <div class="comLinksContainer">
    <label class="miniTitle">Connect with the Community</label>
    <div class="comLinksList">
      <ul>
        <a href="https://www.reddit.com/r/StreetFighter/?rdt=47049" target="_blank"><img src="images/reddit-icon.webp"
            alt="" width="80" /></a>
        <a href="https://steamcommunity.com/app/1364780" target="_blank"><img src="images/steam-icon.png" alt=""
            width="80" /></a>
        <a href="https://www.twitch.tv/directory/category/street-fighter-6" target="_blank"><img
            src="images/twitch-icon.png" alt="" width="80" /></a>
      </ul>
    </div>
  </div>
  <!--comment-->
  <div class="commentTitle">
      <label class="miniTitle commenttext">Write down a comment</label>
    </div>
    <div class="commentsContainer">
  <?php
  echo "<form method='post' action='caller.php'>
    <input type='hidden' name='date' value='" . date('Y-m-d H:i:s') . "'>
    <textarea class='commentBox' name='comment'></textarea><br>
    <input type='hidden' name='next_page' value='gamepage-sf6.php'>
    <button class='commentBtn' type='submit' name='submitCommentsf6'>Comment</button>
</form>";
  ?>
  <form id="commentsf6" method='post' action='caller.php'>
    <input type='hidden' name='next_page' value='sf6'>
    <button class="commentBtn" type="button" onclick="showCommentssf6()">Show Comments</button>
  </form>
  <?php
  echo "<div class='CommentSection'>";
  $array_length = count($usernames);

  for ($index = $array_length - 1; $index >= 0; $index--) {
    echo $usernames[$index] . "<br>";
    echo $dates[$index] . "<br>";
    echo $comments[$index] . "<br><br>";
  }
  echo "</div>";
  ?>
  </div>
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/790cbfd452.js" crossorigin="anonymous"></script>
</body>

</html>