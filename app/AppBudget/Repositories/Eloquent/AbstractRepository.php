<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 6:55
 */

namespace AppBudget\Repositories\Eloquent;


use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

abstract class AbstractRepository
{

    /**
     * @var
     */
    protected $model;

    /**
     * @var Uuid
     */
    protected $uuid;


    /**
     * @param Model $model
     * @param Uuid $uuid
     */
    public function __construct(Model $model, Uuid $uuid)
    {
        $this->model = $model;
        $this->uuid = $uuid;
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    public function getNew(array $attributes = array())
    {
        return $this->model->newInstance($attributes);
    }

    /**
     * @return Uuid
     * @throws \Exception
     */
    public function getUuid()
    {
        return $this->uuid->generate(4);
    }

} 