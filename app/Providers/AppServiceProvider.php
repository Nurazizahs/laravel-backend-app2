<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Pagination\Paginator;
>>>>>>> 503631e (API CRUD)
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        //
=======
        Paginator::useBootstrapFour();
>>>>>>> 503631e (API CRUD)
    }
}
