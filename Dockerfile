# Usar la imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar las extensiones necesarias para PHP
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar mod_rewrite para Apache (por si lo necesitas)
RUN a2enmod rewrite

# Configuración adicional de Apache (si la necesitas)
# Puedes añadir otros pasos aquí, como copiar archivos de configuración o scripts

# Exponer el puerto 80
EXPOSE 80
