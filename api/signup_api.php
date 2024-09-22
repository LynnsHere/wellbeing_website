<?php
require_once('dbinfo.php');

// $name = 'kaunglinthant';
// $usrname = 'lynnthantkaung';
// $password = '1234567890';

$name = htmlspecialchars($_POST["name"]);
$usrname = htmlspecialchars($_POST["hidden_usrname"]);
$password = $_POST["pw"];

if(!empty($usrname) && !empty($password)) {

    $stmt = $conn->prepare("INSERT INTO user_info (name, username, password) VALUES (?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("sss", $name, $usrname, $password);

        try {
            $stmt->execute();

            echo "put";
        } catch (mysqli_sql_exception $e) {
            echo "Could not register: " . $e->getMessage();
            exit();
        }

        $stmt->close();
    }
} else {
    echo "Missing Username and password!";
    // echo "username: ".$usrname;
    // echo "password: ".$password;
}

?>
