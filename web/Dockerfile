FROM php:5.6-fpm
# Install modules

ADD php.ini    /usr/local/etc/php/php.ini
#ADD php-fpm.conf    /usr/local/etc/php-fpm.conf

RUN docker-php-ext-install pdo_mysql

RUN apt-get update
RUN apt-get install -y wget python2.7 python2.7-dev libmysqlclient-dev libxml2-dev libxslt1-dev mysql-client cron supervisor rsyslog

RUN mkdir -p /var/log/supervisor

# Do following install tasks in /tmp
WORKDIR /tmp

# Install latest pip
RUN wget https://bootstrap.pypa.io/get-pip.py
RUN python get-pip.py
RUN pip install --upgrade setuptools
RUN pip install beautifulsoup4 MySQL-python requests lxml python-dotenv

CMD ["/usr/bin/supervisord"]