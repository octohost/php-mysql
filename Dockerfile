FROM octohost/php5-nginx

EXPOSE 80

CMD service php5-fpm start && nginx

