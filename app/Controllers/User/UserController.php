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
     * Get list User
     *
     * @return mixed
     */
    public function index()
    {
        return $this->user->find($this->input('term'));
    }

    /**
     * Get data user via ajax
     *
     * @return mixed
     */
    public function read()
    {
        return $this->user->find($this->input('term'));
    }

    /**
     * Get detail user
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return $this->user->findById($id);
    }

    /**
     * Store new user
     *
     * @return array|mixed
     */
    public function store()
    {
        $form = $this->user->getCreationForm();

        if (!$form->isValid()) {
            $message = $form->getErrors();
            return \Response::json([
                'nama'     => $message->first('nama'),
                'password' => $message->first('password'),
                'email'    => $message->first('email')
            ],500);
        }

        $data = $form->getInputData();

        return $this->user->create($data);
    }

    public function destroy($id)
    {
        return $this->user->destroy($id);
    }

} 