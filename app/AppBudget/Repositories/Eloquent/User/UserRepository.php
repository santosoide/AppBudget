<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 8:00
 */

namespace AppBudget\Repositories\Eloquent\User;


use AppBudget\Models\User\User;
use AppBudget\Repositories\Eloquent\AbstractRepository;
use AppBudget\Repositories\RepositoryInterface\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{

    /**
     * Instance Model User
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * Menampilkan data, pencarian, pagination
     * FullTextSearch
     *
     * @param $term
     * @return mixed
     */
    public function find($term)
    {
        return $this->model
            ->FullTextSearch($term)
            ->paginate(2);
    }

    /**
     * Menampilkan detil data
     *
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function findById($id)
    {
        return $this->model->find($id);
    }

} 