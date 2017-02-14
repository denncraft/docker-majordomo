FROM debian:jessie

RUN apt-get update \
 && apt-get install -y  aptitude \
 && aptitude install -y ntp ntpdate \
 && apt-get install -y apache2 apache2-utils apache2-doc \
 && apt-get install -y php5 php5-cgi php5-cli libapache2-mod-php5 php-pear php5-xcache php5-gd php5-mysql php5-xdebug php5-common php5-dev \
 && apt-get install -y curl libcurl3 libcurl3-dev php5-curl \
 && apt-get install -y mc net-tools sudo ssh git

RUN useradd md -d /home/md -G sudo -m -U \
 && echo "md" >> passwd md \
 && usermod -aG sudo md \
 && service apache2 stop \
 && a2enmod rewrite \
 && cd /var/www \
 && rm -rf * \
 && git clone --depth=1 https://github.com/sergejey/majordomo.git \


ADD config.php /var/www/config.php
ADD envvars /etc/apache2/envvars
ADD apache2.conf /etc/apache2/apache2.comf
ADD 000-default.conf /etc/apache2/sites-available/000-default.conf
ADD php.apache.ini /etc/php5/apache2/php.ini
ADD php.cli.ini /etc/php5/cli/php.ini
ADD majordomo /etc/init.d/majordomo


RUN cd /var/www \
 && chown md:md /var/www \
 && chmod 777 /var/www \
 && chown -Rf md:md \
 && chmod -Rf 0777 * \
 && chmod -Rf 0777 ../www \
 && chown md:md /var/lock/apache2 \
 && chown md:md /var/log/apache2 \
 && chmod 0755 /etc/init.d/majordomo \
 && update-rc.d majordomo defaults \
 && service apache2 start


EXPOSE 80