FROM debian:11-slim

RUN apt-get update -y && \
    apt-get install -y \
    php \
    libapache2-mod-php \
    php-mysql \
    curl \
    wget && \
    rm -rf /var/lib/apt/lists/* && \
    apt-get clean

EXPOSE 80
COPY simple-site/scripts/entry.sh /.entry.sh
RUN chmod +x /.entry.sh

CMD ["/.entry.sh"]