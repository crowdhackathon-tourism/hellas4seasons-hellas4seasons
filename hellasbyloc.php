
<?php


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.eventora.com/en/webApi/EventsList");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$headers = array();
$headers[] = 'apikey : 97B!HS3v4a4m/V6bT7_2!(DzD~A4/l97B!HS3v4a';

curl_setopt($ch, CURLOPT_HEADER, FALSE);//
                         

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
print  $server_output ;
?>