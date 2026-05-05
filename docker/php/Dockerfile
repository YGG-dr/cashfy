FROM php:8.3-fpm-alpine

# Dependências do sistema
RUN apk add --no-cache \
    bash \
    git \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip

# Extensões PHP
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Composer (sem gambiarra)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Usuário não-root (segurança)
RUN addgroup -g 1000 www && adduser -u 1000 -G www -s /bin/sh -D www

WORKDIR /var/www

USER www

CMD ["php-fpm"]
