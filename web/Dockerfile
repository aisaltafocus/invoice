FROM debian:bookworm

WORKDIR /app

RUN apt update -y
RUN apt install \
	php-fpm php-curl php-xml php-bcmath php-zip php-gd php-soap php-mysql php-imagick php-snmp\
	nginx composer cron inetutils-ping supervisor -y

RUN mkdir -p /var/log/supervisor

COPY ./nginx.conf /etc/nginx/sites-enabled/default
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN sed -i 's/post_max_size = 8M/post_max_size = 100M/g' /etc/php/8.2/fpm/php.ini
RUN sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 100M/g' /etc/php/8.2/fpm/php.ini

EXPOSE 80
CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]