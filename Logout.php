<script>
    function logout() {
  var logoutForm = document.getElementById("logoutForm");
  logoutForm.submit();
}
    window.onload = logout;
</script>
<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Logout</title>
        
    </head>

    <body>
        
        <form id="logoutForm" method="post" action="caller.php">
            <input type="hidden" name="next_page" value="index.php" />
        </form>

        <script src="script.js"></script>
    </body>  
    </html>

<?php
    if (!function_exists('handleLogout')) {
        function handleLogout()
        {
            $Next_Page = $_POST['next_page'];
            session_destroy();
            echo '<script>';
            echo 'window.location.href = "' . $Next_Page . '";';
            echo '</script>';
        }
    }
?>