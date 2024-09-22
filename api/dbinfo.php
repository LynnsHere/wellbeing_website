<?php 
$host = 'localhost'; 
$database = 'well_being'; 
$user = 'root'; 
$pass = 'admin'; 
$port="3307";
$conn = new mysqli($host, $user, $pass, $database,$port);
			if ($conn->connect_error) die($conn->connect_error);
			// echo "<br>Successfully connected";
?> 