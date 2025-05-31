<?php
file_put_contents("log.txt", date("Y-m-d H:i:s") . "\n" . file_get_contents("php://input") . "\n\n", FILE_APPEND);
echo "OK";
