FROM php:8.1-fpm

ARG WWW_USER
ARG WWW_GROUP
ARG NODE_VERSION=16

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    libzip-dev \
    libyaml-dev \
    libcurl4-openssl-dev \
    zip \
    unzip \
    default-mysql-client

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip curl \
    && pecl install yaml \
    && docker-php-ext-enable yaml

# Get latest Composer
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

# Install Yarn
RUN curl -sL https://deb.nodesource.com/setup_$NODE_VERSION.x | bash - \
	&& apt-get install -y nodejs \
    && npm install -g npm

# Clear cache
RUN apt-get -y autoremove \
	&& apt-get clean \
	&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Create user
RUN groupadd --force -g $WWW_GROUP webapp
RUN useradd -ms /bin/bash --no-user-group -g $WWW_GROUP -u $WWW_USER webapp
