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

    protected $rules = [
        'nama'  => 'required|max:255',
        'email' => 'required|max:255'
    ];

    public function getInputData()
    {
        return array_only($this->inputData, [
            'nama', 'email'
        ]);
    }

} 