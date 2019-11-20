
FROM debian:buster

MAINTAINER Woolim PARK <wpark@student.42.fr>

RUN apt-get update && apt-get upgrade -y \
&& apt-get -y install wget \
&& apt-get -y install nginx \
&& apt-get -y install php-mbstring php-zip php-gd php-xml php-pear php-gettext php-cli php-fpm php-cgi \
&& apt-get -y install php-mysql \
&& apt-get -y install mariadb-server \
&& apt-get clean -y

COPY srcs/php.ini /tmp/php.ini
COPY srcs/wordpress.tar.gz /tmp/wordpress.tar.gz
COPY srcs/wp-config.php /tmp/wp-config.php
COPY srcs/nginx_config /tmp/nginx_config
COPY srcs/index.php /tmp/index.php
COPY srcs/start.sh /tmp/start.sh

EXPOSE 80
EXPOSE 443

CMD bash /tmp/start.sh && bash
