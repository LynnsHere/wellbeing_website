<?php

// $host = 'localhost'; 
// $database = 'well_being'; 
// $user = 'root'; 
// $pass = 'admin'; 
// $port="3307";
// $conn = new mysqli($host, $user, $pass, $database, $port);

// if ($conn->connect_error) {
//     die($conn->connect_error);
// }
session_start();

require_once('dbinfo.php');

$user_id = $_SESSION['userid']; // Example: fetching data for user_id 36

$today = date('Y-m-d');

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT happiness, workload, anxiety FROM rating WHERE user_id = ?");
$stmt->bind_param("i", $user_id);

// Execute the statement
$stmt->execute();

// Bind the result variables
$stmt->bind_result($happiness, $workload, $anxiety);

// Fetch the data and store it in an array
$data = array();
$data[] = ['Time', 'Happiness', 'Workload', 'Anxiety'];
$time_index = 1; // Start with 1 for the "Time"

while ($stmt->fetch()) {
    $data[] = [$time_index++, (int)$happiness, (int)$workload, (int)$anxiety];
}

// Close the statement and connection
$stmt->close();
$conn->close();

// Convert the data array to JSON
echo json_encode($data);

?>
