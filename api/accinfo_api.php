<?php

session_start();

require_once('dbinfo.php');
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
$name = $_SESSION['name'];
$date = '';
// $userid = 1;
// $username = 'admin';
// $name = 'kaung';


$stmt = $conn->prepare("
        SELECT created_time 
        FROM user_info 
        WHERE user_id = ? 
        AND username = ?
        ");

$stmt->bind_param("is", $userid, $username);

$stmt->execute();

$stmt->bind_result($date);

if ($stmt->fetch()) {
    echo json_encode([
        'name' => $name,
        'username' => $username,
        'date' => $date
    ]);
}

$stmt->close();
$conn->close();

?>