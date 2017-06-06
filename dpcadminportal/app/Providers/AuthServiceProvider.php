<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Internal notifications
        Gate::define('internal_notification_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('internal_notification_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Transactions
        Gate::define('transaction_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Sales
        Gate::define('sale_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('sale_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('sale_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('sale_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('sale_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Purchases
        Gate::define('purchase_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('purchase_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('purchase_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('purchase_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('purchase_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}
