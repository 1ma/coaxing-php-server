# Builtin PHP server Demo

Sample code for the blog post [Coaxing PHP's built-in server into being useful](https://blog.1mahq.com/2022/coaxing-the-php-webserver/).
It just runs a toy PHP project at `http://localhost:8080` using the technique outlined in the blog post.

## Run from local PHP installation

```bash
$ composer install
$ php -S localhost:8080 -t public cli-fc.php
```

If you have PHP 7.4 or newer you can spawn more than one worker to be able to serve a few requests concurrently:

```bash
$ composer install
$ PHP_CLI_SERVER_WORKERS=4 php -S localhost:8080 -t public cli-fc.php
```

## Run as a docker-compose stack

```bash
$ composer install
$ docker-compose up -d
```

Take a look at `docker-compose.yml` for more details.
