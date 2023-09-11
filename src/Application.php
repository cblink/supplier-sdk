<?php

namespace Cblink\Supplier;

use Cblink\Service\Foundation\Container;
use Cblink\Service\Foundation\Providers\BaseServiceProvider;
use Hyperf\Utils\Collection;


/**
 * @property-read Collection $config
 *
 * @property-read Kernel\AccessToken $access_token 应用token
 * @property-read Product\Client $product       商品
 * @property-read Order\Client $order           订单
 */
class Application extends Container
{
    protected array $providers = [
        BaseServiceProvider::class,
        Kernel\ServiceProvider::class,
        Product\ServiceProvider::class,
        Order\ServiceProvider::class,
    ];

}