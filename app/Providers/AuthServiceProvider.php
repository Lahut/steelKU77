<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        \App\Product::class => \App\Policies\ProductPolicy::class,
        \App\Branch::class => \App\Policies\BranchPolicy::class,
        \App\Order::class => \App\Policies\OrderPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-product', function ($user, $product) {
            return $user->isAdmin() or $user->id === $product->user->id;
        });

        Gate::define('create-post', function ($user, $product) {
            return $user->isAdmin() or $user->isCreator();
        });
    }

}
