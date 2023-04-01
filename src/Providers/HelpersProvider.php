<?php
/*
 * Copyright © 2023. mPhpMaster(https://github.com/mPhpMaster) All rights reserved.
 */

namespace MPhpMaster\LaravelNovaDateField\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Fields\Date;
use MPhpMaster\LaravelNovaDateField\DateMixin;

/**
 * Class HelpersProvider
 *
 * @package MPhpMaster\LaravelNovaDateField\Providers
 */
class HelpersProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Date::mixin(new DateMixin);
    }

    /**
     * Bootstrap services.
     *
     * @param Router $router
     *
     * @return void
     */
    public function boot(Router $router)
    {
    }

    /**
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
