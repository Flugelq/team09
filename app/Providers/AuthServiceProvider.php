<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use app\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function($user){return $user->role === User::ROLE_ADMIN;});
        Gate::define('manager', function($user){return $user->role === User::ROLE_MANAGER;});
        Gate::define('edit-forest', function($user){return $user->role === User::ROLE_ADMIN || $user->role === User::ROLE_MANAGER;});
        Gate::define('user', function($user){return $user->role === User::ROLE_USER;});

        //
    }
}
