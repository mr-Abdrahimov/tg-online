#!/bin/bash

if [ ! -d session.madeline ]; then
    echo "First run"
    docker run -ti -v ${PWD}:/app hub.madelineproto.xyz/danog/madelineproto:latest php /app/online_simple.php
    exit 0
fi

docker run --restart always  -d --name telegram_online_simple -v ${PWD}:/app hub.madelineproto.xyz/danog/madelineproto:latest php /app/online_simple.php
exit 0

