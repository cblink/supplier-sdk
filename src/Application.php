<?php

namespace Cblink\Supplier;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;


/**
 * @property-read Collection $config
 *
 * @property-read Product\Client $product       商品
 */
class Application  extends Container
{
    protected array $providers = [
        Product\ServiceProvider::class,
    ];

}