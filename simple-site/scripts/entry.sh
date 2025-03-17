#!bin/bash
service apache2 start 

a2dissite 000-default.conf

cp /var/www/html/config/mysite.conf /etc/apache2/sites-available/

a2ensite mysite.conf
a2enmod rewrite

service apache2 restart 
tail -f /dev/null