<?php

namespace Cblink\Supplier\Order;

use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
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

    /**
     * 申请退款
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function refund(array $data = [])
    {
        return $this->httpPost('/api/order/refund', $data);
    }

}