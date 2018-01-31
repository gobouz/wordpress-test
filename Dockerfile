FROM wordpress:4.9.2-apache

RUN pecl install xdebug
RUN echo zend_extension="$(find /usr/local/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.remote_enable = 1" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.remote_autostart = 1" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.default_enable = 0" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.remote_connect_back = 0" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.profiler_enable = 0" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.remote_host = 10.0.75.1" >> /usr/local/etc/php/conf.d/xdebug.ini

EXPOSE 9000

WORKDIR /var/www/html