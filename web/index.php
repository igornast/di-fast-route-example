<?php declare(strict_types=1);

use Laminas\Diactoros\ServerRequestFactory;
use Middlewares\FastRoute;
use Middlewares\RequestHandler;
use Narrowspark\HttpEmitter\SapiEmitter;
use Relay\Relay;

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$container = require __DIR__ . '/../config/container.php';
$routes = require __DIR__ . '/../config/routes.php';

$middleware = [
    new FastRoute($routes),
    new RequestHandler($container)
];

$requestHandler = new Relay($middleware);
$response = $requestHandler->handle(ServerRequestFactory::fromGlobals());

(new SapiEmitter())->emit($response);