# Usar uma imagem PHP oficial com Apache
FROM php:8.0-apache

# Copiar o código para o diretório do Apache
COPY . /var/www/html/

# Expor a porta 80
EXPOSE 80