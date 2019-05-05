<?php
    $cSession = curl_init();

//step2
curl_setopt($cSession,CURLOPT_URL,"https://lyft.com/ride?id=lyft&pickup[latitude]=37.764728&pickup[longitude]=-122.422999&partner=UoJ748bo1b-W&destination[latitude]=37.7763592&destination[longitude]=-122.4242038");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);

//step3
$results = curl_exec($cSession);
$err = curl_error($cSession);

echo $results;
//step4
curl_close($cSession);

//step5

echo "lol";
?>