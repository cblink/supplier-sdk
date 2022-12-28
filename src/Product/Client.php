<?php

namespace Cblink\Supplier\Product;

use Cblink\Service\Foundation\BaseApi;

class Client extends BaseApi
{

    /**
     * 商品分类列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function categoryList(array $query = [])
    {
        return $this->httpGet('/api/product/category', $query);
    }

    /**
     * 商品品牌列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function brandList(array $query = [])
    {
        return $this->httpGet('/api/product/brand', $query);
    }

    /**
     * 商品列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/api/product', $query);
    }

    /**
     * 获取商品详情
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/product/%s', $id), $query);
    }

    /**
     * 获取商品SKU
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSku($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/product/%s/sku', $id), $query);
    }

    /**
     * 获取商品规格
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSpec($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/product/%s/spec', $id), $query);
    }

    /**
     * 获取商品属性
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getContent($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/product/%s/content', $id), $query);
    }

    /**
     * 获取商品附加品
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAddons($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/product/%s/addons', $id), $query);
    }

    /**
     * 获取商品资源
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSource($id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/product/%s/source', $id), $query);
    }

    /**
     * 获取商品库存
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getProductStock(array $query = [])
    {
        return $this->httpGet('/api/stock/product', $query);
    }

    /**
     * 获取sku库存
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSkuStock(array $query = [])
    {
        return $this->httpGet('/api/stock/sku', $query);
    }
}