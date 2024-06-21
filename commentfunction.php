<?php
//session_start();
// Tekken8
if (!function_exists('handleSetCommentsTekken8')) {
    function handleSetCommentsTekken8($conn)
    {
        if (isset($_POST['submitCommentTekken8'])) {
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $Username = $_SESSION["Username"];
            $Next_Page = $_POST['next_page'];

            if ($comment == "") {
                echo '<script>alert("The comment cannot be blank.")</script>';
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
            } else {
                $stmt = $conn->prepare("SELECT User_ID FROM User_Tbl WHERE Username = ?");
                $stmt->bind_param("s", $Username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $User_ID = $row['User_ID'];

                    $stmt = $conn->prepare("INSERT INTO Tekken8_Tbl (User_ID, Username, date, comment) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $User_ID, $Username, $date, $comment);

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
    }
}
if (!function_exists('handleGetCommentsTekken8')) {
    function handleGetCommentsTekken8($conn)
    {
        $stmt = $conn->prepare("SELECT * FROM Tekken8_Tbl");
        $stmt->execute();
        $result = $stmt->get_result();

        $dates = [];
        $comments = [];
        $usernames = [];

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Comment = $row['Comment'];
            $Username = $row['Username'];

            $dates[] = $Date;
            $comments[] = $Comment;
            $usernames[] = $Username;
        }

        $_SESSION['sessionDates'] = $dates;
        $_SESSION['sessionComments'] = $comments;
        $_SESSION['sessionUsernames'] = $usernames;

        echo '<script>';
        echo 'window.location.href = "gamepage-tk8.php";';
        echo '</script>';
    }
}
// UNIB
if (!function_exists('handleSetCommentsUNIB')) {
    function handleSetCommentsUNIB($conn)
    {
        if (isset($_POST['submitCommentUNIB'])) {
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $Username = $_SESSION["Username"];
            $Next_Page = $_POST['next_page'];

            if ($comment == "") {
                echo '<script>alert("The comment cannot be blank.")</script>';
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
            } else {
                $stmt = $conn->prepare("SELECT User_ID FROM User_Tbl WHERE Username = ?");
                $stmt->bind_param("s", $Username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $User_ID = $row['User_ID'];

                    $stmt = $conn->prepare("INSERT INTO UNIB_Tbl (User_ID, Username, date, comment) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $User_ID, $Username, $date, $comment);

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
    }
}
if (!function_exists('handleGetCommentsUNIB')) {
    function handleGetCommentsUNIB($conn)
    {
        $stmt = $conn->prepare("SELECT * FROM UNIB_Tbl");
        $stmt->execute();
        $result = $stmt->get_result();

        $dates = [];
        $comments = [];
        $usernames = [];

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Comment = $row['Comment'];
            $Username = $row['Username'];

            $dates[] = $Date;
            $comments[] = $Comment;
            $usernames[] = $Username;
        }

        $_SESSION['sessionDates'] = $dates;
        $_SESSION['sessionComments'] = $comments;
        $_SESSION['sessionUsernames'] = $usernames;

        echo '<script>';
        echo 'window.location.href = "gamepage-UNIB.php";';
        echo '</script>';
    }
}
// sf6
if (!function_exists('handleSetCommentssf6')) {
    function handleSetCommentssf6($conn)
    {
        if (isset($_POST['submitCommentsf6'])) {
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $Username = $_SESSION["Username"];
            $Next_Page = $_POST['next_page'];

            if ($comment == "") {
                echo '<script>alert("The comment cannot be blank.")</script>';
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
            } else {
                $stmt = $conn->prepare("SELECT User_ID FROM User_Tbl WHERE Username = ?");
                $stmt->bind_param("s", $Username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $User_ID = $row['User_ID'];

                    $stmt = $conn->prepare("INSERT INTO sf6_Tbl (User_ID, Username, date, comment) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $User_ID, $Username, $date, $comment);

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
    }
}
if (!function_exists('handleGetCommentssf6')) {
    function handleGetCommentssf6($conn)
    {
        $stmt = $conn->prepare("SELECT * FROM sf6_Tbl");
        $stmt->execute();
        $result = $stmt->get_result();

        $dates = [];
        $comments = [];
        $usernames = [];

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Comment = $row['Comment'];
            $Username = $row['Username'];

            $dates[] = $Date;
            $comments[] = $Comment;
            $usernames[] = $Username;
        }

        $_SESSION['sessionDates'] = $dates;
        $_SESSION['sessionComments'] = $comments;
        $_SESSION['sessionUsernames'] = $usernames;

        echo '<script>';
        echo 'window.location.href = "gamepage-sf6.php";';
        echo '</script>';
    }
}
// sf3
if (!function_exists('handleSetCommentssf3')) {
    function handleSetCommentssf3($conn)
    {
        if (isset($_POST['submitCommentsf3'])) {
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $Username = $_SESSION["Username"];
            $Next_Page = $_POST['next_page'];

            if ($comment == "") {
                echo '<script>alert("The comment cannot be blank.")</script>';
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
            } else {
                $stmt = $conn->prepare("SELECT User_ID FROM User_Tbl WHERE Username = ?");
                $stmt->bind_param("s", $Username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $User_ID = $row['User_ID'];

                    $stmt = $conn->prepare("INSERT INTO sf3_Tbl (User_ID, Username, date, comment) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $User_ID, $Username, $date, $comment);

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
    }
}
if (!function_exists('handleGetCommentssf3')) {
    function handleGetCommentssf3($conn)
    {
        $stmt = $conn->prepare("SELECT * FROM sf3_Tbl");
        $stmt->execute();
        $result = $stmt->get_result();

        $dates = [];
        $comments = [];
        $usernames = [];

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Comment = $row['Comment'];
            $Username = $row['Username'];

            $dates[] = $Date;
            $comments[] = $Comment;
            $usernames[] = $Username;
        }

        $_SESSION['sessionDates'] = $dates;
        $_SESSION['sessionComments'] = $comments;
        $_SESSION['sessionUsernames'] = $usernames;

        echo '<script>';
        echo 'window.location.href = "gamepage-sf3.php";';
        echo '</script>';
    }
}
// GBFRVR
if (!function_exists('handleSetCommentsGBFRVR')) {
    function handleSetCommentsGBFRVR($conn)
    {
        if (isset($_POST['submitCommentGBFRVR'])) {
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $Username = $_SESSION["Username"];
            $Next_Page = $_POST['next_page'];

            if ($comment == "") {
                echo '<script>alert("The comment cannot be blank.")</script>';
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
            } else {
                $stmt = $conn->prepare("SELECT User_ID FROM User_Tbl WHERE Username = ?");
                $stmt->bind_param("s", $Username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $User_ID = $row['User_ID'];

                    $stmt = $conn->prepare("INSERT INTO GBFRVR_Tbl (User_ID, Username, date, comment) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $User_ID, $Username, $date, $comment);

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
    }
}
if (!function_exists('handleGetCommentsGBFRVR')) {
    function handleGetCommentsGBFRVR($conn)
    {
        $stmt = $conn->prepare("SELECT * FROM GBFRVR_Tbl");
        $stmt->execute();
        $result = $stmt->get_result();

        $dates = [];
        $comments = [];
        $usernames = [];

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Comment = $row['Comment'];
            $Username = $row['Username'];

            $dates[] = $Date;
            $comments[] = $Comment;
            $usernames[] = $Username;
        }

        $_SESSION['sessionDates'] = $dates;
        $_SESSION['sessionComments'] = $comments;
        $_SESSION['sessionUsernames'] = $usernames;

        echo '<script>';
        echo 'window.location.href = "gamepage-GBFRVR.php";';
        echo '</script>';
    }
}
// ggs
if (!function_exists('handleSetCommentsggs')) {
    function handleSetCommentsggs($conn)
    {
        if (isset($_POST['submitCommentggs'])) {
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $Username = $_SESSION["Username"];
            $Next_Page = $_POST['next_page'];

            if ($comment == "") {
                echo '<script>alert("The comment cannot be blank.")</script>';
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
            } else {
                $stmt = $conn->prepare("SELECT User_ID FROM User_Tbl WHERE Username = ?");
                $stmt->bind_param("s", $Username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $User_ID = $row['User_ID'];

                    $stmt = $conn->prepare("INSERT INTO ggs_Tbl (User_ID, Username, date, comment) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $User_ID, $Username, $date, $comment);

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
    }
}
if (!function_exists('handleGetCommentsggs')) {
    function handleGetCommentsggs($conn)
    {
        $stmt = $conn->prepare("SELECT * FROM ggs_Tbl");
        $stmt->execute();
        $result = $stmt->get_result();

        $dates = [];
        $comments = [];
        $usernames = [];

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Comment = $row['Comment'];
            $Username = $row['Username'];

            $dates[] = $Date;
            $comments[] = $Comment;
            $usernames[] = $Username;
        }

        $_SESSION['sessionDates'] = $dates;
        $_SESSION['sessionComments'] = $comments;
        $_SESSION['sessionUsernames'] = $usernames;

        echo '<script>';
        echo 'window.location.href = "gamepage-ggs.php";';
        echo '</script>';
    }
}
// kof
if (!function_exists('handleSetCommentskof')) {
    function handleSetCommentskof($conn)
    {
        if (isset($_POST['submitCommentkof'])) {
            $date = $_POST['date'];
            $comment = $_POST['comment'];
            $Username = $_SESSION["Username"];
            $Next_Page = $_POST['next_page'];

            if ($comment == "") {
                echo '<script>alert("The comment cannot be blank.")</script>';
                echo '<script>';
                echo 'window.location.href = "' . $Next_Page . '";';
                echo '</script>';
            } else {
                $stmt = $conn->prepare("SELECT User_ID FROM User_Tbl WHERE Username = ?");
                $stmt->bind_param("s", $Username);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $User_ID = $row['User_ID'];

                    $stmt = $conn->prepare("INSERT INTO kof_Tbl (User_ID, Username, date, comment) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("isss", $User_ID, $Username, $date, $comment);

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
    }
}
if (!function_exists('handleGetCommentskof')) {
    function handleGetCommentskof($conn)
    {
        $stmt = $conn->prepare("SELECT * FROM kof_Tbl");
        $stmt->execute();
        $result = $stmt->get_result();

        $dates = [];
        $comments = [];
        $usernames = [];

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Comment = $row['Comment'];
            $Username = $row['Username'];

            $dates[] = $Date;
            $comments[] = $Comment;
            $usernames[] = $Username;
        }

        $_SESSION['sessionDates'] = $dates;
        $_SESSION['sessionComments'] = $comments;
        $_SESSION['sessionUsernames'] = $usernames;

        echo '<script>';
        echo 'window.location.href = "gamepage-kof.php";';
        echo '</script>';
    }
}