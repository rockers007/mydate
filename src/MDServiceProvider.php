<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Rockers\MYDATE;

use Illuminate\Support\ServiceProvider;

class MDServiceProvider extends ServiceProvider
{
   /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
        $this->loadViewsFrom(__DIR__ . '/Views', 'bmi');
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['mydate'] = $this->app->share(function ($app) {
            return new MYDATE;
        });
    }
}