<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Platine\Config\Config;
use Platine\Config\FileLoader;
use Quantum\Hub\WebHook;

$configFolder = '.';
$loader = new FileLoader($configFolder);
$config = new Config($loader);
$wh = new WebHook($config);

$wh->handle();
