<?php 
// http://php.net/manual/en/features.file-upload.multiple.php


    $file_ary = reArrayFiles($_FILES['fileName']);

    foreach ($file_ary as $file) {
        if ($file["error"] > 0) {
          echo "Error: " . $file["error"] . "<br>";
        }
        else {
          echo "Upload: " . $file["name"] . "<br>";
          echo "Type: " . $file["type"] . "<br>";
          echo "Size: " . ($file["size"] / 1024) . " KB<br>";
          echo "Stored in: " . $file["tmp_name"] . "<br>";$_POST["email"] . "<br>";
          echo $_POST["caption"] . "<br>";
        }  
        
        include 'dbConn.php';
    
    $binaryData = file_get_contents($file["tmp_name"]);
    $date = "SELECT NOW()";
    $sql = "INSERT INTO up_files (email_address, caption, media, timestamp) " . "  VALUES ('" . $_POST['email'] . "', '" . $_POST['caption'] . "', '" . $file . "', '" . $data . "') ";
    $stm=$dbConn->prepare($sql);
    $stm->execute();
    echo "<br />File saved into database <br /><br />"; 
        
    }

function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }

    return $file_ary;
}
?>

