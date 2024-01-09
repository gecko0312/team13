<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::defaultview('vendor.pagination.semantic-ui');
        Gate::define('admin', function($user){
            return $user->role === User::role_admin;
        });
        Gate::define('manager', function($user){
            return $user->role === User::role_manager;
        });
        Gate::define('uer', function($user){
            return $user->role === User::role_user;
        });
    }
}
