<?php

namespace Cblink\Supplier\Kernel;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['access_token'] = function($pimple){
            return new AccessToken($pimple);
        };
    }

}