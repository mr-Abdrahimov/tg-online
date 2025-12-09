<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();

/**
 * Проверяет, является ли время "красивым"
 * Красивые времена: одинаковые цифры (00:00, 11:11, 22:22) и круглые (05:00, 10:00, 15:00)
 */
function isBeautifulTime($hour, $minute) {
    $h = str_pad($hour, 2, '0', STR_PAD_LEFT);
    $m = str_pad($minute, 2, '0', STR_PAD_LEFT);
    
    // Одинаковые цифры: 00:00, 11:11, 22:22
    if ($h === $m) {
        return true;
    }
    
    // Круглые времена: минуты = 00 (00:00, 01:00, 02:00, ..., 23:00)
    if ($minute === 0) {
        return true;
    }
    
    return false;
}

while(1) {
    $now = new DateTime();
    $hour = (int)$now->format('H');
    $minute = (int)$now->format('i');
    $second = (int)$now->format('s');
    
    // Проверяем, является ли время красивым
    if (isBeautifulTime($hour, $minute)) {
        // Запускаем онлайн примерно на 15-й секунде
        if ($second >= 15 && $second <= 20) {
            $MadelineProto->account->updateStatus(offline: false);
            echo "[" . $now->format('H:i:s') . "] Online updated (beautiful time: {$hour}:{$minute})\n";
        }
    }
    
    // Проверяем каждую секунду для точности
    sleep(1);
}
