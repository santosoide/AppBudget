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

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function getAll()
    {
        return $this->model->paginate(2);
    }

    public function find($term)
    {
        return $this->model
//            ->where('nama', 'LIKE', '%' . $term . '%')
            ->FullTextSearch($term)
            ->paginate(2);
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

} 