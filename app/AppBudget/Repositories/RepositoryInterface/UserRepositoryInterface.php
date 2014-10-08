<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 7:57
 */

namespace AppBudget\Repositories\RepositoryInterface;


interface UserRepositoryInterface {

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $term
     * @return mixed
     */
    public function find($term);

    /**
     * @param $id
     * @return mixed
     */
    public function findById($id);

}