<?php

use Xtreamwayz\Pimple\Container;
use Zend\Expressive\Application;
use Sergiors\Dolly\Pimple\Provider\ExpressiveServiceProvider;
use Sergiors\Dolly\Pimple\Provider\FastRouteServiceProvider;
use Sergiors\Dolly\Pimple\Provider\DelegateServiceProvider;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

$container->register(new ExpressiveServiceProvider());
$container->register(new FastRouteServiceProvider());
$container->register(new DelegateServiceProvider());

$app = $container->get(Application::class);

$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();

$app->get('/', new \Sergiors\Dolly\Hello);

$app->run();
