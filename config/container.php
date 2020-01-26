<?php declare(strict_types=1);

use DI\ContainerBuilder;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder;
$containerBuilder = new ContainerBuilder;
$containerBuilder->addDefinitions(__DIR__ . '/services.php');

return $containerBuilder->build();