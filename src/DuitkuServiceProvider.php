<?php

namespace robbiedh\Duitku;

use Illuminate\Support\ServiceProvider;

class DuitkuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
           
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('robbiedh\duitku\DuitkuController');
    }
}
