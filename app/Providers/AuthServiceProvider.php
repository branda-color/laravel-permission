<?php

namespace App\Providers;

use App\Models\Article;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class  => UserPolicy::class,
        Article::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->UserPolicy();

        //
    }

    public function UserPolicy()
    {
        Gate::define('view articles',  [UserPolicy::class, 'view']);
        Gate::define('create articles', 'ArticlePolicy@create');
        Gate::define('delete articles', 'ArticlePolicy@delete');
        Gate::define('update articles', 'ArticlePolicy@update');
    }
}
