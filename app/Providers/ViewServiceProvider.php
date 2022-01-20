<?php

namespace App\Providers;

use App\Models\Cat;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('Site.layout' , function($view){
            $view->with('cats' , Cat::select('id' , 'name')->get());
        });

        view()->composer('Site.category' , function($view){
            $view->with('cats' , Cat::select('id' , 'name')->get());
        });
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
