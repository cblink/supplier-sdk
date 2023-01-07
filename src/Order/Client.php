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
     * 更新ext
     *
     * @param $id
     * @param string $extId
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateExt($id, string $extId)
    {
        return $this->httpPut(sprintf('/api/order/%s/ext', $id), ['ext_id' => $extId]);
    }

}