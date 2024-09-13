# Use a imagem PHP oficial
FROM php:8.0-apache

# Copie o código da aplicação para o diretório do Apache
COPY . /var/www/html/

# Exponha a porta 80
EXPOSE 80