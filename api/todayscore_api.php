<?php

session_start();

require_once('dbinfo.php');

$userid = $_SESSION['userid'];
$today = date('Y-m-d');
// $userid = 1;

$stmt = $conn->prepare("
        SELECT happiness, workload, anxiety, rated_date 
        FROM rating 
        WHERE user_id = ? 
        AND rated_date = ?
        ");

$stmt->bind_param("is", $userid, $today);

$stmt->execute();

$stmt->bind_result($happiness, $workload, $anxiety, $date);

if ($stmt->fetch()) {
    echo json_encode([
        'happiness' => $happiness,
        'workload' => $workload,
        'anxiety' => $anxiety,
        'status' => 1
    ]);
} else {
    echo json_encode([
        'happiness' => 'None',
        'workload' => 'None',
        'anxiety' => 'None',
        'status' => 0
    ]);
}

$stmt->close();
$conn->close();

?>
