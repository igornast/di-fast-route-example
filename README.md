# PHP-DI and Fast-Route example

Example project with dependency injection container and routing samples. 

## Getting Started

### Installing

Install deps via composer

```
composer install
```

## Running

Start php server

```
php -S localhost:8080 -t web/
```

### Container

PHP-DI is a dependency injection container meant to be practical, powerful, and framework-agnostic.
In project there are two classes registered one for ServerRequestInterface and other one for custom ItemService class. 
Definitions are located in config/services.php file as an array.
More information [here](http://php-di.org/doc/php-definitions.html)

```php
return [
    ItemService::class => create(ItemService::class),
    ServerRequestInterface::class => ServerRequestFactory::fromGlobals(),
];
```

### Routes

In project is used middleware to handle FastRoute route definitions. Configuration is located in config/routes.php.
Very intuitive and easy to use, controller class is matched to the routes and invoked as a handler.
More information [here](https://github.com/middlewares/fast-route).

```php
return simpleDispatcher(function (RouteCollector $r) {
    $r->get('/item/list', ItemList::class);
    $r->get('/item/{id:\d+}', ItemSingle::class);
});
```

## Built With

* [DI](https://github.com/PHP-DI/PHP-DI) - PHP-DI
* [FastRoute](https://github.com/nikic/FastRoute) - Nikic Fast Route
* [HttpEmitter](https://github.com/narrowspark/http-emitter) - Http Response Emitter
* [Relay](https://github.com/relayphp/Relay.Relay) - Relay Request Handler

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
