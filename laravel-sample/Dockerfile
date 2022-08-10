FROM php:8.1.9-fpm-buster

COPY . .

EXPOSE 8000
ENTRYPOINT ["php","-S","0.0.0.0:8000", "-t", "public"]
