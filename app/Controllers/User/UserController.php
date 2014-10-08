<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 8:57
 */

namespace Controllers\User;


use AppBudget\Repositories\RepositoryInterface\UserRepositoryInterface;
use AppBudget\Repositories\RepositoryInterface\UserTrait;

class UserController extends \BaseController
{
    use UserTrait;
    /**
     * @var UserRepositoryInterface
     */
    protected $user;

    /**
     * @param UserRepositoryInterface $user
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    /**
     * Menampilkan list User
     *
     * @return mixed
     */
    public function index()
    {
        return $this->user->find($this->input('term'));
    }

    public function read()
    {
        return $this->user->find($this->input('term'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->user->findById($id);
    }

} 