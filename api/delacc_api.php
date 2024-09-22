<?php

require_once('dbinfo.php');
session_start();

$username = $_SESSION['username'];
// $username = 'ljfg';
$userid = $_SESSION['userid'];
// $userid = 3;

$stmt = $conn -> prepare("DELETE FROM user_info WHERE username = ? AND user_id = ?");
$stmt -> bind_param("si", $username, $userid);
$stmt -> execute();
$stmt -> store_result();

if($stmt -> affected_rows > 0){
    echo "1";
} else{
    echo 0;
}

// require_once('dbinfo.php');

// // $username = $_SESSION['username'];
// $username = "sumyat";
// // $userid = $_SESSION['userid'];
// $userid = 2;
// $password_db = "";

// $stmt = $conn -> prepare("SELECT password FROM user_info WHERE username = ? AND user_id = ?");
// $stmt -> bind_param("si", $username, $userid);
// $stmt -> execute();
// $stmt -> store_result();

// if($stmt -> num_rows > 0){
//     $stmt -> bind_result($password_db);
//     $stmt -> fetch();
//     echo $password_db;
// } else{
//     echo "0";
// }
