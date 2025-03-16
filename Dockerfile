FROM ubuntu

RUN apt-get update 
COPY entry.sh /.entry.sh
RUN apt-get install apache2 -y

 
RUN mkdir /var/www/html/mysite

COPY index.php /var/www/html/mysite/index.php

COPY mysite.conf /etc/apache2/sites-available/mysite.conf

RUN a2dissite 000-default.conf
RUN a2ensite mysite.conf

RUN service apache2 restart
EXPOSE 80

CMD ["/.entry.sh"]