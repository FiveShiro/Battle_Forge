<?php
session_start();
if (!function_exists('handleLogin')) {
    function handleLogin($conn) {
        try {
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $Next_Page = $_POST['next_page'];
        $_SESSION["Username"] = $Username;

        $stmt = $conn->prepare("SELECT Password FROM User_Tbl WHERE Username = ?");
        $stmt->bind_param("s", $Username);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['Password'];
            

            if (password_verify($Password, $storedPassword)) {
                echo '<script>';
                echo 'window.location.href = "'.$Next_Page.'";'; 
                echo '</script>';
                exit;
            } else {
                $message1 = "Invalid Password";
                echo '<script>';
                echo 'alert("' . $message1 . '");';
                echo 'window.location.href = "main_login.php";'; 
                echo '</script>';
                exit; 
            }
        } else {
            $message2 = "Invalid Username";
            echo '<script>';
            echo 'alert("' . $message2 . '");';
            echo 'window.location.href = "main_login.php";';
            echo '</script>';
            exit; 
        }
        } catch (Exception $e) {
            error_log($e->getMessage());
            echo "An error occurred during login. Please try again later.";
        }
        $stmt->close();
    }
}

