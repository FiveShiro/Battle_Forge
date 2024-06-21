<?php 
    include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost" />
</head>

<body>
<div class="backgroundimg">
        <img src="images/bg.jpg" alt="">
        <div class="container">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h2 style="text-align: center;">Sign Up</h2>
                <input class="input-field" type="text" name="username" placeholder="Username (max 16 characters)" maxlength="16" >
                <input class="input-field" type="text" name="email" placeholder="E-mail e.g email@email.com" >
                    
                    <div class="password-container">
                        <input id="password"  type="password" name="password" placeholder="Password" >
                        <span id="eye" >&#128065;</span>
                    </div>

                <input id="password2" type="password" name="password" placeholder="Confirm password" >
                <input class="submit" type="submit" value="Enter">
            </form>
        </div>
    </div>

    <script>
        let eye = document.getElementById("eye");
        let password = document.getElementById("password");
        let password2 = document.getElementById("password2");

        eye.onclick = function (){
            if(password.type === "password"){
                password.type = "text";
                password2.type = "text";
            }
            else{
                password.type = "password";
                password2.type = "password";
            }
        }
    </script>
 
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo"Enter a username";
        }elseif(empty($email)){
            echo"Enter a Email";
        }elseif(empty($password)){
            echo"Enter a password";
        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, email, password)
                    VALUES ('$username','$email','$hash')";
            mysqli_query($conn, $sql);
            echo"You are now registered!";
        }
        
    }
    ?>

   
</body>

</html>