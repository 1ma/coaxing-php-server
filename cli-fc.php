<?php

// $_SERVER['DOCUMENT_ROOT'] is the absolute path to the public directory in your filesystem, e.g. /var/www/webapp/public
// $_SERVER['REQUEST_URI'] is the URI of the HTTP request, e.g. /assets/css/bulma.css
$path = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];

// If $path is a direct file hit let the cli server handle this simple case.
if (is_file($path)) {
    return false;
}

// If $path is a directory and contains an index.html file let the
// cli server handle it, because we know it _will_ serve that index.html
if (is_dir($path) && is_file("$path/index.html")) {
    return false;
}

// All other cases should be handled by the real front controller
require_once __DIR__ . '/public/fc.php';
