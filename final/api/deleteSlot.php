<?php
    include 'Conn.php';
    
    $conn = getDatabaseConnection("final");
    
    $sql = "DELETE FROM `appointment` WHERE id = '" . $_POST["id"] . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo json_encode(array());
?>