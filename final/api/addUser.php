<?php
    include 'Conn.php';
    
    $conn = getDatabaseConnection("final");
    

    $options = [ 'cost' => 11 ];
    $hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
    
    $sql = "INSERT INTO `user`(`username`, `password`, `firstname`, `lastname`) VALUES ('" . $_POST["username"] . "', '" . $hashedPassword . "', '" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    echo json_encode(array());
?>