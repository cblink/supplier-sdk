<?php

namespace Cblink\Supplier\Kernel;

class AccessToken extends \Cblink\Service\Foundation\AccessToken
{
    public function getToken()
    {
        return [
            $this->tokenKey => $this->app->config->get('api_token'),
        ];
    }
}