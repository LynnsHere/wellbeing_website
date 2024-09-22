<?php
require_once('../api/dbinfo.php');
session_start();

$password = $_POST['password'];
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
// $username = 'klthant';
// $userid = 42;

$password_db = "";

$stmt = $conn->prepare("SELECT password FROM user_info WHERE username = ? AND user_id = ?");
$stmt->bind_param("si", $username, $userid);
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows > 0){
    $stmt->bind_result($password_db);
    $stmt->fetch();
    // echo $password_db;
    // echo $password;
    // Use password_verify to check the entered password against the hashed password in the database
    if($password === $password_db){
        echo "1";
    }
    else{
        echo "0"; // wrong password
    }
} else{
    echo "0"; // user not found
}
