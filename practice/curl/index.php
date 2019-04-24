<?php

$apiKey = "BQDPCc7jC35CcqeX55OKLmBw7nVrsP8q3TIs3hIBFGa0ndkRffA4-yYLhG3DuCQrtjam58qy3QxnYml__oGhpOyL9LbfUf1SEFR5ZJyK1s8u9w0ugLI91R0GTSYg-Cy8aXxTHHsqdGMP5_jalAxh4cV5UhwIOHPTDciWeC7LaMlxkz3SX-eQRjjf2IRAbbh83xuSehSjZA6NZ121IVu3qAXeJtPufSgNblqOQruA";
$query = "nigth%20moves";
$type = "track";
$market = "US";

$cSession = curl_init();

curl_setopt($cSession, CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
));

curl_setopt($cSession,CURLOPT_URL,"https://api.spotify.com/v1/search?query=beyonce&type=artist&market=US&offset=0&limit=20");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);

curl_setopt($cSession,CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Bearer $apiKey"
));

$results = curl_exec($cSession);
$err = curl_error($cSession);

$errno = curl_errno($cSession);
if ($errno) {
    switch ($errno) {
        default:
            echo "Error #$errno...execution halted";
            break;
    }

    // Close the session and exit
    curl_close($cSession);
    exit();
}

curl_close($cSession);



echo ($results);
?>