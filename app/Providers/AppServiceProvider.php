<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\IService;
use App\Services\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	$this->app->bind('App\Services\IService', 'App\Services\Service');
	//$this->app->bind(IService::class, Service::class);
    }
}
