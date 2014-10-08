<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 7:57
 */

namespace AppBudget\Repositories\RepositoryInterface;


interface UserRepositoryInterface
{

    /**
     * Get All user, pencarian data dan pagination
     *
     * @param $term
     * @return mixed
     */
    public function find($term);

    /**
     * Get user By id
     *
     * @param $id
     * @return mixed
     */
    public function findById($id);

    /**
     * Store new user
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    public function destroy($id);

    /**
     * Get input form
     *
     * @return mixed
     */
    public function getCreationForm();

    /**
     * Get edit form
     *
     * @return mixed
     */
    public function getEditForm();

}