<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 08/10/2014
 * Time: 8:45
 */

namespace AppBudget\Services\Forms\User;


use AppBudget\Services\Forms\AbstractForm;

class CreateNewUserForm extends AbstractForm
{

    /**
     * Siapkan Validasi data user
     *
     * @var array
     */
    protected $rules = [
        'nama'     => 'required|max:255',
        'password' => 'required|max:255',
        'email'    => 'required|email|max:255|unique:users,email',
    ];

    /**
     * Siapkan input data user
     *
     * @return array
     */
    public function getInputData()
    {
        return array_only($this->inputData, [
            'nama', 'email', 'password'
        ]);
    }

}