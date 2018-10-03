FROM php:7.1-fpm

# Install AMQP extension.
RUN apt-get update \
    && apt-get install -y \
        supervisor \
        librabbitmq-dev \
        libssh-dev \
    && pecl install \
        amqp \
        redis \
    && docker-php-ext-enable amqp redis
WORKDIR /symfony

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf