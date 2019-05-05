<?php 
    if ($_FILES["fileName"]["error"] > 0) {
    echo "Error: " . $_FILES["fileName"]["error"] . "<br>";
    } else {
    echo "Upload: " . $_FILES["fileName"]["name"] . " | ";
    echo "Type: " . $_FILES["fileName"]["type"] . " | ";
    echo "Size: " . ($_FILES["fileName"]["size"] / 1024) . " KB | ";
    echo "Stored in: " . $_FILES["fileName"]["tmp_name"];
    }
    
    include 'dbConn.php';
    
    if( $_FILES["fileName"]["size"] / 1024 > 10000){
        echo "File needs to be less then 10 MB";
    }else{
    
    $file = addslashes(file_get_contents($_FILES["fileName"]["tmp_name"]));
    $date = "SELECT NOW()";
    $sql = "INSERT INTO `up_files`(`email`, `caption`, `media`, `timestamp`) VALUES ('" . $_POST['email'] . "', '" . $_POST['textbox'] . "', '" . $file .  "', '" . $date . "')";
    $stm= $dbConn->prepare($sql);
    $stm->execute();
    echo "<br />File saved into database <br /><br />";
    }

?>

