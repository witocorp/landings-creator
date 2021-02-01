#!/bin/bash
# VARIABLES
#
# $usr          - usuari
# $dir          - directori fitxers web
# $domini       - domini a crear

#Agafem els parametres
usr="apache"
dir="/var/www/landingfy-creator.com/landings/"
domini=$1

#Crear directori web
mkdir -p $dir$domini
echo "<?php echo '<h1>$domini</h1>'; ?>" > $dir$domini/index.php
chown -R $usr:$usr $dir$domini
chmod -R '755' $dir$domini

#Crear vhost
sudo touch /etc/httpd/conf.d/$domini.conf
sudo chown apache:root /etc/httpd/conf.d/$domini.conf
echo "#### $domini
<VirtualHost *:80>
    ServerName $domini
    ServerAlias $domini
    DocumentRoot $dir$domini
</VirtualHost>" > /etc/httpd/conf.d/$domini.conf

#Activar ssl i reiniciar apache
sudo certbot --non-interactive --agree-tos --redirect --no-eff-email --cert-name $domini --apache -d $domini -m osbendc@gmail.com
sudo apachectl restart
