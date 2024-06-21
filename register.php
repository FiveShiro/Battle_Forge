<?php

if (!function_exists('handleRegister')) {
    function handleRegister($conn)
    {
        $Username = mysqli_real_escape_string($conn, $_POST['Username']);
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
        $Next_Page = $_POST['next_page'];

        $stmt = $conn->prepare("SELECT Password FROM user_tbl WHERE Username = ?");
        $stmt->bind_param("s", $Username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            echo '<script>alert("That Username Already Exist.")</script>';
            echo '<script>';
            echo 'window.location.href = "register.html";';
            echo '</script>';
        } else {
            $stmt = $conn->prepare("INSERT INTO User_Tbl (email, username, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $Email, $Username, $Password);

            if ($stmt->execute()) {
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
                exit;
            } else {
                echo '<script>alert("Something went wrong, please try again.")</script>';
            }

            $stmt->close();
        }
    }
}
