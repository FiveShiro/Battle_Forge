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
          <li><a href="gamepage-kof.html">KOFXV</a></li>
          <li><a href="gamepage-ggs.html">GGS</a></li>
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
  <!--Image banners-->
  <div class="bannerContainer">
    <div class="bannerWrapper">
      <img id="tk8logo" src="images/tekken8_logo.jpg.webp" alt="" />
    </div>
  </div>
  <!--Game's original description, copy paste them from steam-->
  <p class="pGames">
    Get ready for the next chapter in the legendary fighting game franchise,
    TEKKEN 8.
  </p>
  <!--Useful web links-->
  <div class="webLinksContainer">
    <label class="miniTitle">Useful Websites</label>
    <div class="webLinksList">
      <ul>
        <!--the more the merrier-->
        <li><a href="https://www.tekkenzone.net">Tekkenzone</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
  <!--Connect with the community-->
  <div class="comLinksContainer">
    <label class="miniTitle">Connect with the Community</label>
    <div class="comLinksList">
      <ul>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
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
    <input type='hidden' name='next_page' value='gamepage-tk8.php'>
    <button class='commentBtn' type='submit' name='submitCommentTekken8'>Comment</button>
</form>";
  ?>
  <form id="commentTk8" method='post' action='caller.php'>
    <input type='hidden' name='next_page' value='tk8'>
    <button class="commentBtn" type="button" onclick="showCommentsTekken8()">Show Comments</button>
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