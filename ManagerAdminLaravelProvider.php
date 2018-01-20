<?php

namespace Pavelpolv\ManagerAdminLaravel;

use Illuminate\Support\ServiceProvider;

class ManagerAdminLaravelProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/Commands' => base_path('app/Console/Commands/'),
            __DIR__.'/lang'=> base_path('resources/lang/')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
