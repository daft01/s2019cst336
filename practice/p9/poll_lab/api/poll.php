<?php

include '../dbConnection.php';
$conn = getDatabaseConnection("poll");

$val = $_GET['update'];

$sql = "SELECT * from poll_response WHERE pollId = 'q1';";
$stmt = $conn -> prepare($sql);  
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC); 

$num = $recond[ $val ];
$num += 1;

$sql = "UPDATE poll_response SET $val = $num WHERE pollId = q1;";

$stmt = $conn -> prepare($sql);  
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC); 
$w = $record["word"];

for ($x = 0; $x < strlen($w); $x++) {
    if($w[$x] == $letter)
        $word[$x] = $letter;
} 

echo json_encode($word);
?>