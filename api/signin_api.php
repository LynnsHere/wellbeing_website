<?php
session_start();
include ("../api/dbinfo.php");

$username = htmlspecialchars($_POST['usrname']);
$password = $_POST["password"];
$db_username = '';
$db_password = '';
$user_id = '';
$name = '';

if (!empty($username) && !empty($password)) {
    if ($stmt = $conn->prepare("SELECT user_id, name, username, password FROM user_info WHERE username = ?")) {
        $stmt->bind_param("s", $username);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $name, $db_username, $db_password);

            $stmt->fetch();

            if ($password == $db_password) {
                echo "success";
                $_SESSION['userid'] = $user_id;
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['signin'] = 1;
            } else {
                echo "Check your 'Username' and 'Password' again.";
            }
        } else {
            echo "Check your 'Username' and 'Password' again.";
        }

        $stmt->close();
    }
} else {
    echo "Missing Username and password!";
}

$conn->close();
?>
