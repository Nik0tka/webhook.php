
<?php call_user_func(function($hookObj){file_get_contents("https://api.telegram.org/bot<631375327:AAE7Gf01N_ySwFy0RILiPxdKjBtfMg6QPSU>/sendMessage?chat_id=" .$hookObj["message"]["chat"]["id"] . "&text=" . urlencode($hookObj['message']['text']));},json_decode(file_get_contents("php://input"), true)); ?>
