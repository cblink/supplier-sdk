<?php

namespace Cblink\Supplier\Order;

use Cblink\Service\Foundation\BaseRequestApi;

class Client extends BaseRequestApi
{
    /**
     * 创建订单
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $data = [])
    {
        return $this->httpPost('/api/order', $data);
    }


}