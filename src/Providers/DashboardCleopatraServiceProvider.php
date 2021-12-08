<?php

namespace LDK\DashboardCleopatra\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class DashboardCleopatraServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Paginator::useBootstrap();

        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'dashboard-cleopatra');
    }
}
