<?php
curl -X POST \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer {H2Q6FYwbjTgS968nqMVD/d+3O3vlYUHLNiW/XPjxSfYT6aYA4XYB8qjyxgJwh6P2JwnIaf27Tiq80rTFus7vFdGlb8AWKJlMD0P5/N4bjbGpA9XULT/qn6DJR7KUrrMdbuSvgCFHbwFHYDkJyFMKBgdB04t89/1O/w1cDnyilFU=}' \
-d '{
     "to": "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
     "messages":[
          {
               "type":"text",
               "text":"Hello, user"
          },
          {
               "type":"text",
               "text":"May I help you?"
          }
      ]
}' https://api.line.me/v2/bot/message/push
?>
