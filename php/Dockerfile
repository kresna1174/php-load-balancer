FROM php:8.1-cli

COPY . /var/www/app/start.sh

WORKDIR /var/www/app

RUN chmod +x ./start.sh

CMD ["sh", "./start.sh"]