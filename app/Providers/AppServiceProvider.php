<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.admin_sidebar', function($view){
            $countries = User::all()->pluck('country')->unique();
            $cities = User::all()->pluck('city')->unique();
            $sexes = User::all()->pluck('sex')->unique();

            $view->with(compact('countries', 'cities', 'sexes'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
