# PHP 7.4 dengan Apache — cocok untuk PHP vanilla dari Hostinger
FROM php:7.4-apache

# ─── System dependencies ─────────────────────────────────────────────────────
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    zip \
    unzip \
    curl \
    git \
    nano \
    && rm -rf /var/lib/apt/lists/*

# ─── PHP Extensions ──────────────────────────────────────────────────────────
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        gd \
        pdo \
        pdo_mysql \
        mysqli \
        mbstring \
        zip \
        xml \
        curl \
        bcmath \
        opcache

# ─── Apache modules ──────────────────────────────────────────────────────────
RUN a2enmod rewrite headers ssl

# ─── php.ini custom settings ─────────────────────────────────────────────────
COPY php/php.ini /usr/local/etc/php/conf.d/custom.ini

# ─── Apache virtual host ─────────────────────────────────────────────────────
COPY apache/sites-available/antrian.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

# ─── Working directory ───────────────────────────────────────────────────────
WORKDIR /var/www/html

# Hak akses agar PHP bisa write (upload, session, cache)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80 443
