<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ShopContactProvider
 * @package App\Providers
 */
class ShopContactProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
