<?php

$autoload = __DIR__ . '/../vendor/autoload.php';

if (!file_exists($autoload)) {
    die('Run `composer install` first');
}

require $autoload;

