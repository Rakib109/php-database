<?php 

function connect(){  
$conn = new mysqli("localhost", "rakib", "3033", "task");
if ($conn->connect_errno){
	die("Database connection failed ..." . $conn->connect_error);
}
return $conn;
}
?>