<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
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
        $menuJson = file_get_contents(base_path('resources/Json/adminNavMenu.json'));
        $menuData = json_decode($menuJson);
        \View::share('menuData', $menuData);
    }
}
