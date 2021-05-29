# PHP version php:alpine

FROM php:7.4-fpm

LABEL description="Prisba project. This install php, nodejs, source files."

# Arguments defined in docker-compose.yml
ARG user
ARG uid
ARG group

# Install system dependencies
RUN apt-get update && apt-get install -y \
    htop \
    wget \
    git \
    curl \
    vim \
    mc \
    gcc \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
    
  
# Install Nodejs verions 12.x    
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - && \
apt-get update && apt-get install -y nodejs

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user

RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Set working directory
WORKDIR /var/www

USER $user
