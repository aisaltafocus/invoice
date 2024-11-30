#!/bin/bash

service nginx start
service php8.2-fpm start
service cron start

trap exit SIGINT ; read -r -d '' _ </dev/tty
