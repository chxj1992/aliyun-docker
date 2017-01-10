FROM php:5.6-fpm

ADD sources.list /etc/apt/sources.list

# Install modules
RUN docker-php-ext-install pdo_mysql mysql mysqli
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN apt-get update
RUN apt-get install -y wget python2.7 python2.7-dev python-pip libmysqlclient-dev libxml2-dev libxslt1-dev mysql-client cron supervisor rsyslog

RUN mkdir -p /var/log/supervisor

# Do following install tasks in /tmp
#WORKDIR /tmp
# Install latest pip
#RUN wget https://bootstrap.pypa.io/get-pip.py
#RUN python get-pip.py

RUN pip install -U pip setuptools -i http://pypi.douban.com/simple 
RUN pip install beautifulsoup4 MySQL-python requests lxml html5lib python-dotenv -i http://pypi.douban.com/simple --trusted-host pypi.douban.com

ADD php.ini    /usr/local/etc/php/php.ini
#ADD php-fpm.conf    /usr/local/etc/php-fpm.conf

CMD ["/usr/bin/supervisord"]
