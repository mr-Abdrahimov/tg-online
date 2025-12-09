@echo off

if not exist "session.madeline" (
    echo First run
    docker run -ti -v "%CD%":/app hub.madelineproto.xyz/danog/madelineproto:latest php /app/online_simple.php
    exit /b 0
)

docker run --restart always -d --name telegram_online_simple -v "%CD%":/app hub.madelineproto.xyz/danog/madelineproto:latest php /app/online_simple.php
exit /b 0

