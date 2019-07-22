<?php 
 /*Return HTTP Request 200*/
 http_response_code(200);
?>

<?php
/*
$access_token = 'H2Q6FYwbjTgS968nqMVD/d+3O3vlYUHLNiW/XPjxSfYT6aYA4XYB8qjyxgJwh6P2JwnIaf27Tiq80rTFus7vFdGlb8AWKJlMD0P5/N4bjbGpA9XULT/qn6DJR7KUrrMdbuSvgCFHbwFHYDkJyFMKBgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
