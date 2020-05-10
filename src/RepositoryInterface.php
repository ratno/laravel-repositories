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
     * Search By Keyword
     *
     * @param $keyword
     * @return mixed
     */
    public function searchByKeyword($keyword);
}