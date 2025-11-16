FROM php:8.2-apache

# Copia todos os arquivos do projeto para o servidor web
COPY . /var/www/html/

# Ativa mod_rewrite (opcional)
RUN a2enmod rewrite

# Expondo a porta usada pelo Apache
EXPOSE 80
