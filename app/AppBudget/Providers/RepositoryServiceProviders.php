<?php
/**
 * Created by PhpStorm.
 * User: Edi Santoso
 * Date: 06/10/2014
 * Time: 8:11
 */

namespace AppBudget\Providers;


use Illuminate\Support\ServiceProvider;

class RepositoryServiceProviders extends ServiceProvider
{

    public function register()
    {
        // binding User Repositories
        $this->app->bind(
            'AppBudget\Repositories\RepositoryInterface\UserRepositoryInterface',
            'AppBudget\Repositories\Eloquent\User\UserRepository'
        );
    }

} 