<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 08/10/2014
 * Time: 13:37
 */

namespace AppBudget\Services\Forms\User;


use AppBudget\Services\Forms\AbstractForm;

class EditUserForm extends AbstractForm
{

    /**
     * Siapkan validasi data user
     *
     * @var array
     */
    protected $rules = [
        'nama'  => 'required|max:255',
        'email' => 'required|max:255'
    ];

    /**
     * Siapkan input data user
     *
     * @return array
     */
    public function getInputData()
    {
        return array_only($this->inputData, [
            'nama', 'email'
        ]);
    }

} 