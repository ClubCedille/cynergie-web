FROM bitnami/php-fpm:7.1-prod
RUN apt-get update && apt-get install -y libmcrypt-dev 