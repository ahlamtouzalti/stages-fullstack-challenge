<?php

namespace App\Providers;

use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Définit la locale Carbon
        Carbon::setLocale(config('app.locale'));
    }
}
