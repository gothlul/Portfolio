# Use a imagem PHP oficial
FROM php:8.0-apache

# Copie o código da aplicação para o diretório do Apache
COPY . /var/www/html/

# Ajuste as permissões dos arquivos
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponha a porta 80
EXPOSE 80
