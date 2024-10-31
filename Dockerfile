# Use uma imagem base do PHP com Apache
FROM php:8.2-apache

# Instale libxml2-dev para que o PHP possa habilitar a extensão XML
RUN apt-get update && apt-get install -y libxml2-dev \
    && docker-php-ext-install xml

# Copie os arquivos do projeto para o diretório padrão do Apache
COPY . /var/www/html/

# Defina permissões para o diretório
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Exponha a porta 80 para o Apache
EXPOSE 80
