# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: zqadiri <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/01/07 16:31:29 by zqadiri           #+#    #+#              #
#    Updated: 2020/01/19 02:46:33 by zqadiri          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
EXPOSE 80 443

#req
RUN apt-get update
RUN apt-get install --yes  wget nginx gnupg
COPY srcs/default /etc/nginx/sites-available/
RUN apt-get install -y expect
RUN apt-get install -y php7.3 php7.3-fpm php7.3-mysql php-common php7.3-cli php7.3-common php7.3-json php7.3-opcache php7.3-readline php-mbstring
RUN apt-get install -y vim

#mysql
RUN wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
 
#wp
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -zxvf latest.tar.gz  -C /var/www/html/
COPY srcs/wp-config.php var/www/html/wordpress/

#phpmyadmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN tar xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN mv phpMyAdmin-4.9.0.1-all-languages  phpmyadmin
RUN cp -rf phpmyadmin ./var/www/html/
COPY srcs/con.sh /
COPY srcs/testdb.sql /

#ssl
COPY srcs/localhost.crt  /etc/ssl/certs/
COPY srcs/localhost.key  /etc/ssl/private/

RUN apt-get update
RUN apt-get upgrade
CMD bash con.sh
