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
     * @param string $searchKeyword
     * @param string $sortBy
     * @param string $limit
     * @param array $filters
     * @return mixed
     */
    public function loadData($searchKeyword="",$sortBy="",$limit="",array $filters=[]);

    /**
     * Apply Criteria For Search By Keyword
     * @param string $searchKeyword
     * @return mixed
     */
    public function applySearchKeyword($searchKeyword = "");

    /**
     * Apply order by field_name|asc or field_name|desc
     * use comma for multiple field_name order
     *
     * @param string $sortBy
     * @return mixed
     */
    public function applySortBy($sortBy = "");

    /**
     * Apply Criteria for exact value filter (boolean, foreign key, etc)
     * @param array $filters
     * @return mixed
     */
    public function applyFilters(array $filters=[]);

    /**
     * Get the data result
     *
     * @param string $limit
     * @param string[] $columns
     * @return mixed
     */
    public function getResults($limit="", $columns = ['*']);
}