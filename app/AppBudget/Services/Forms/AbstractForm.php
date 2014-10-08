<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 08/10/2014
 * Time: 8:46
 */

namespace AppBudget\Services\Forms;


abstract class AbstractForm
{

    /**
     * Input current request
     *
     * @var
     */
    protected $inputData;

    /**
     * The validation rules to valdiate the input data against
     *
     * @var array
     */
    protected $rules = [];

    /**
     * validator instance
     *
     * @var
     */
    protected $validator;

    /**
     * Array for custom messages
     *
     * @var array
     */
    protected $messages = [];

    /**
     * Instance Request App input data all
     */
    public function __construct()
    {
        $this->inputData = \App::make('request')->all();
    }

    /**
     * Get the prepared input data
     *
     * @return mixed
     */
    public function getInputData()
    {
        return $this->inputData;
    }

    /**
     * return whether the input dat is valid
     *
     * @return bool
     */
    public function isValid()
    {
        $this->validator = \Validator::make(
            $this->getInputData(),
            $this->getPreparedRules(),
            $this->getMessages()
        );

        return $this->validator->passes();
    }

    /**
     * Get the validation errors off of the the validator instance
     *
     * @return mixed
     */
    public function getErrors()
    {
        return $this->validator->errors();
    }

    /**
     * Get the custom validation messages
     *
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Get the prepared validation rules
     *
     * @return array
     */
    protected function getPreparedRules()
    {
        return $this->rules;
    }

} 