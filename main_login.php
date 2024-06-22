<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="style2.css" />
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
      <source src="videos/videobg2.mp4" type="video/mp4" />
    </video>
    <div class="navcontainer">
      <nav class="nav" id="nav">
        <a href="index.php"
          ><img id="logo" src="images/logo.png" class="logo"
        /></a>
      </nav>
    </div>
    <div class="signincontainer">
      <form action="caller.php" method="post">
        <h2 style="text-align: center">Login</h2>
        <input
          class="input-field"
          type="text"
          name="username"
          placeholder="Username"
          maxlength="16"
        />
        <div class="password-container">
          <input
            id="password"
            type="password"
            name="password"
            placeholder="Password"
          />
          <span
            id="eye"
            title="Toggle Password Visibility"
            onclick="togglePasswordVisibility()"
            >&#128065;</span
          >
        </div>
        <input type="hidden" name="next_page" value="homepage.php" />
        <input class="submit" type="submit" value="Login" />
        <div class="signinlblContainer">
          <label class="signinLbl"
            >Don't have an account?
            <a href="register.html">
              <span style="color: #ff005c">Sign up here</span></a
            ></label
          >
        </div>
      </form>
    </div>

    <script>
      function togglePasswordVisibility() {
        let password = document.getElementById("password");

        if (password.type === "password") {
          password.type = "text";
        } else {
          password.type = "password";
        }
      }
    </script>
  </body>
</html>