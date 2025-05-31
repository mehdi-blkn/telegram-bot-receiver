<?php
// ثبت ورودی برای تست
file_put_contents("log.txt", date("Y-m-d H:i:s") . "\n" . file_get_contents("php://input") . "\n\n", FILE_APPEND);

// ارسال پاسخ به همان کاربر
$data = json_decode(file_get_contents("php://input"), true);
if (isset($data["message"]["chat"]["id"]) && isset($data["message"]["text"])) {
    $chat_id = $data["message"]["chat"]["id"];
    $text = $data["message"]["text"];
    $token = "8189602480:AAGDNptxdfUE3EyjgK1FFODYqjdjzmvn-5A";
    
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode("شما گفتید: $text"));
}

echo "OK";
