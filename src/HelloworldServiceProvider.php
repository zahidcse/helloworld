<?php

namespace Zahidcse\Helloworld;

use Illuminate\Support\ServiceProvider;

class HelloworldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        dd('HI');
    }
}
