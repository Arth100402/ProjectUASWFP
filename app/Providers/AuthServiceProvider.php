<?php

namespace App\Providers;

use App\Models\Type;
use App\Policies\BrandPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\ProductPolicy;
use App\Policies\MemberPolicy;
use App\Policies\TypePolicy;
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
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-backend', [MemberPolicy::class, 'accessBackend']);

        Gate::define('add-to-cart-permission', [MemberPolicy::class, 'addToCart']);
        Gate::define('transaction-view-permission', [MemberPolicy::class, 'authorizeViewTransaction']);
        Gate::define('owner-only-permission', [MemberPolicy::class, 'ownerOnly']);
    }
}
