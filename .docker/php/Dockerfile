FROM php:7.1-fpm
RUN apt-get update \
    && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libpng-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install pdo pdo_mysql gd zip pcntl
ENV XDEBUGINI_PATH=/usr/local/etc/php/conf.d/xdebug.ini
RUN pecl install -o -f redis xdebug-2.5.0 \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis
RUN echo "zend_extension="`find /usr/local/lib/php/extensions/ -iname 'xdebug.so'` > $XDEBUGINI_PATH
COPY xdebug.ini /tmp/xdebug.ini
COPY environment.ini /usr/local/etc/php/conf.d/environment.ini
RUN cat /tmp/xdebug.ini >> $XDEBUGINI_PATH
#RUN echo "xdebug.remote_host="`/sbin/ip route|awk '/default/ { print $3 }'` >> $XDEBUGINI_PATH