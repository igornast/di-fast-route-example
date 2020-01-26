<?php declare(strict_types=1);

use App\Service\ItemService;
use Laminas\Diactoros\ServerRequestFactory;
use Psr\Http\Message\ServerRequestInterface;
use function DI\create;

return [
    ItemService::class => create(ItemService::class),
    ServerRequestInterface::class => ServerRequestFactory::fromGlobals(),
];