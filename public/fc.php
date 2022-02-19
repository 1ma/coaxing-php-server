<?php

// Real front controller inside the public directory, to be used directly by Apache or NGINX in production.
// It is not aware of the PHP webserver at all, as it should be.

require_once __DIR__ . '/../vendor/autoload.php';

echo 'Front controller for Symfony, Laravel, Slim or similar.' . PHP_EOL;
