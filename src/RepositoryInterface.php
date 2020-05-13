<?php
namespace Ratno\Repository;

/**
 * Interface RepositoryInterface
 * @package Ratno\Repository
 * @author Ratno Putro Sulistiyono <ratno@knoqdown.com>
 */
interface RepositoryInterface
{
    /**
     * Find data by uuid
     *
     * @param       $uuid
     * @param array $columns
     *
     * @return mixed
     */
    public function findByUUid($uuid, $columns = ['*']);

    /**
     * Load data with search keyword, sort by and limit
     *
     * @param $searchKeyword
     * @param $sortBy
     * @param $limit
     * @return mixed
     */
    public function loadData($searchKeyword="",$sortBy="",$limit="");
}