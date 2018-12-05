
<?php call_user_func(function($hookObj){file_get_contents("https://api.telegram.org/bot612221952:AAF-s--usYCnduXaBtpzkjYJ8M2Y0PzvyX4/sendMessage?chat_id=" .$hookObj["message"]["chat"]["id"] . "&text=" . urlencode($hookObj['message']['text']));},json_decode(file_get_contents("php://input"), true)); ?>
