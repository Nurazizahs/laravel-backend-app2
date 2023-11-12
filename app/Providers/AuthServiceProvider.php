<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
=======

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public static $permission = [
        'dashboard' => ['superadmin', 'admin'],
        'user-index' => ['admin'],
        'payment-update' => ['superadmin'],

    ];
>>>>>>> 503631e (API CRUD)
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        //
=======

        foreach (self::$permission as $feature => $roles) {
            Gate::define($feature, function (User $user) use ($roles) {
                if (in_array($user->role, $roles)) {
                    return true;
                }
            });
        }
>>>>>>> 503631e (API CRUD)
    }
}
