<?php

namespace App\Contracts;

/**
 * Interface ProductContract
 * @package App\Contracts
 */
interface ProductContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProducts(string $order = 'id', string $sort = 'desc', array $columns = ['*']);



    /**
     * @param array $columns
     * @param string $orderBy
     * @param string $sortBy
     * * @param string $filterBy
     * @return mixed
     */
    public function filterProducts(string $order = 'id', string $sort = 'asc',  array $columns = ['*'], string $filter);

    /**
     * @param int $id
     * @return mixed
     */
    public function findProductById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createProduct(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateProduct(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteProduct($id);

    /**
     * @param $slug
     * @return mixed
     */
    public function findProductBySlug($slug);

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
}
