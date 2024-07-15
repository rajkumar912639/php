<?php

require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// get posted data
	$data = json_decode(file_get_contents("php://input", true));
	
$sql = "INSERT INTO student (name,email,pass)VALUES('{$student_name}','{$student_email}','
{$student_pass}')";


if(mysqli_query($conn, $sql)) {
    
    echo json_encode(array('message' => 'record inserted ', 'status' => 'success'));
} else {
    echo json_encode(array('message' => 'No record iserted', 'status' => 'false'));
}

?>