<?php

    include 'Conn.php';
    
    $conn = getDatabaseConnection("final");
    
    $sql = "INSERT INTO `appointment` (`date`, `time`, `duration`, `book`, `username`, `id`) VALUES ('" . $_POST["date"] . "',  '" . $_POST["startingTime"] .  "',  '" . $_POST["time"] . "', 'Empty',  '" . $_POST["username"] . "', NULL);";
   
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo json_encode(array());
?>