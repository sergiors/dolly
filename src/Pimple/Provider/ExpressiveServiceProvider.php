<?php

namespace Sergiors\Dolly\Pimple\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Zend\Expressive\Application;
use Zend\Expressive\Container\ApplicationFactory;

final class ExpressiveServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container[Application::class] = function (Container $container) {
            return (new ApplicationFactory)($container);
        };
    }
}
