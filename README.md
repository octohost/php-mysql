php-mysql
=========

Test using PHP and a MySQL ambassador container.

The main problem with this is that nginx and PHP-FPM don't seem to pass the [new Docker environment variables around](http://docs.docker.io/en/latest/examples/running_redis_service/) - so the dynamic generation is pretty useless.

Will maybe try with other languages later - but abandoning for now.
