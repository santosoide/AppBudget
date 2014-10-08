<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 6:55
 */

namespace AppBudget\Repositories\Eloquent;


use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{

    /**
     * @var
     */
    protected $model;


    /**
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function getNew(array $attributes = array())
    {
        return $this->model->newInstance($attributes);
    }

} 