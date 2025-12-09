<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

while(1) {
    $MadelineProto->account->updateStatus(offline: false);
    $now = new DateTime();
    echo "[" . $now->format('H:i:s') . "] Online updated\n";
    sleep(15);
}

