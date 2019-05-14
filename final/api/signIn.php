<?php
    include 'Conn.php';
    
    $conn = getDatabaseConnection("final");
    
   
    $sql = "SELECT `password` FROM user WHERE username = '" . $_GET["username"] . "'";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $hash = $records[0]['password'];
    
    if (password_verify( $_GET["password"], $hash)) {
        echo json_encode("success");
    } else {
        echo json_encode("fail");
    }
?>