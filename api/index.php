<?php

namespace Api;

require_once __DIR__ . '/../vendor/autoload.php';

use Api\Http\Router;
use Dotenv\Dotenv;

Dotenv::createImmutable(__DIR__ . '/..')->load();

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

Router::handle($method, $uri);
