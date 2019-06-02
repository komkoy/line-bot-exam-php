<?php

$access_token = 'H2Q6FYwbjTgS968nqMVD/d+3O3vlYUHLNiW/XPjxSfYT6aYA4XYB8qjyxgJwh6P2JwnIaf27Tiq80rTFus7vFdGlb8AWKJlMD0P5/N4bjbGpA9XULT/qn6DJR7KUrrMdbuSvgCFHbwFHYDkJyFMKBgdB04t89/1O/w1cDnyilFU=';

$userId = 'U079ad78e37e36c9e6f40ebec84b1f203';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

