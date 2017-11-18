<?php

namespace Sergiors\Dolly\Pimple\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Router\FastRouteRouter;

final class FastRouteServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container[RouterInterface::class] = function () {
            return new FastRouteRouter();
        };
    }
}
