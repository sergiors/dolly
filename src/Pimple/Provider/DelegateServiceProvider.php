<?php

namespace Sergiors\Dolly\Pimple\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Zend\Expressive\Delegate\NotFoundDelegate;
use Zend\Expressive\Container\NotFoundDelegateFactory;

final class DelegateServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container[NotFoundDelegate::class] = function (Container $container) {
            return (new NotFoundDelegateFactory)($container);
        };

        $container['Zend\Expressive\Delegate\DefaultDelegate'] = function (Container $container) {
            return $container->get(NotFoundDelegate::class);
        };
    }
}
