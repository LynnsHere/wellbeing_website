<?php

session_start();

require_once('dbinfo.php');

$userid = $_SESSION['userid'];
// $userid = 1;

$stmt = $conn->prepare("
        SELECT happiness, workload, anxiety, rated_date 
        FROM rating 
        WHERE user_id = ? 
        ORDER BY rated_date DESC
        LIMIT 3
        ");

$stmt->bind_param("i", $userid);

$stmt->execute();

$stmt->bind_result($happiness, $workload, $anxiety, $date);
$date_s = "";
$sum_happiness = 0;
$sum_workload = 0;
$sum_anxiety = 0;
$rec_count = 0;

while ($stmt->fetch()) {
    $sum_happiness += $happiness;
    // echo "happiness: " . $sum_happiness ;
    $sum_workload += $workload;
    // echo "workload: " . $sum_workload ;
    $sum_anxiety += $anxiety;
    // echo "anxiety: " . $sum_anxiety ;
    // echo $date_s;

    $rec_count++;
    // echo "Record count: " . $rec_count ."<br>";
}

$a_happiness = $sum_happiness/3;
// echo $a_happiness."<br>";
$a_workload = $sum_workload/3;
// echo $a_workload."<br>";
$a_anxiety = $sum_anxiety/3;
// echo $a_anxiety."<br>";
if($rec_count == 3){
    if($a_happiness < 1.5 || $a_workload < 1.5 ||$a_anxiety < 1.5 ){
        echo "low";
    }
    else{
        // echo "low";
        echo "find";
    }
} else{
    // echo "low";
    echo "find";
}


$stmt->close();
$conn->close();
