<?php
session_start();

require_once('dbinfo.php');

$happiness = $_POST["happiness"];
$workload = $_POST["workload"];
$anxiety = $_POST["anxiety"];
$userid = $_SESSION['userid'];

$today = date('Y-m-d');
// $today = '2024-8-16';

// echo "$happiness, $workload, $anxiety";
if( $stmt = $conn -> prepare ("SELECT * FROM rating WHERE user_id = ? AND rated_date = ?")){
    $stmt -> bind_param("is", $userid, $today);
    $stmt -> execute(); 
    $stmt -> store_result();

    if($stmt -> num_rows > 0){
        if($stmt = $conn -> prepare("UPDATE rating SET happiness = ?, workload = ?, anxiety = ? WHERE user_id = ? and rated_date = ?")){
            $stmt -> bind_param("iiiis",$happiness, $workload, $anxiety, $userid, $today);
            $stmt -> execute(); 
            echo "update";
            $stmt -> close();
        }
    }
    else{
        if($stmt = $conn -> prepare ("INSERT INTO rating(user_id,happiness,workload,anxiety) VALUES (?,?,?,?)")){
            $stmt -> bind_param("iiii",$userid,$happiness,$workload,$anxiety);
            $stmt -> execute();
            echo "success";
            $stmt -> close();
        }
    }
}  

