<?php



require "vendor/autoload.php";

$access_token = 'H2Q6FYwbjTgS968nqMVD/d+3O3vlYUHLNiW/XPjxSfYT6aYA4XYB8qjyxgJwh6P2JwnIaf27Tiq80rTFus7vFdGlb8AWKJlMD0P5/N4bjbGpA9XULT/qn6DJR7KUrrMdbuSvgCFHbwFHYDkJyFMKBgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd0ac609ed8126cf9eb8c82893ae7b4bd';

$pushID = 'U079ad78e37e36c9e6f40ebec84b1f203';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







