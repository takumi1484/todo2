<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

//use Illuminate\Support\Facades\URL;//追加追記：効果なし

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
//        URL::forceScheme('https');//追加　追記：効果なし
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