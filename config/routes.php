<?php declare(strict_types=1);

use App\Controller\Item\ItemList;
use App\Controller\Item\ItemSingle;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

return simpleDispatcher(function (RouteCollector $r) {
    $r->get('/item/list', ItemList::class);
    $r->get('/item/{id:\d+}', ItemSingle::class);
});