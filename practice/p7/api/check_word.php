<?php
//Used to check the letter the user inputed in the form, and if the letter is in the word
//Should return an array of booleans as the api

include '../dbConnection.php';
$conn = getDatabaseConnection("tcp");

$id = intval($_GET['id']);
$word = $_GET['word'];
$letter = $_GET['letter'];
$sql = "SELECT * FROM  `words` WHERE word_id = $id";
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