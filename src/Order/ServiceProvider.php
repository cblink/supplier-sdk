<?php

namespace Cblink\Supplier\Order;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['order'] = function($pimple){
            return new Client($pimple);
        };
    }

}