<?php

    include 'Conn.php';
    
    $conn = getDatabaseConnection("final");
    
    $sql = "SELECT * FROM  appointment WHERE username = '" . $_GET["username"] . "' ORDER BY date";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);


    echo json_encode($records);
  
?>