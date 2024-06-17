<?php

namespace App\Providers;

use App\Http\Controllers\SpendingController;
use App\Models\Spending;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        view()->composer('welcome', 'App\Http\View\Composers\SpendingComposer');

        //Checks for identity between user id and spending user id
        //Not allows add/edit spending for another user
        Gate::define('update-spending', function (User $user, Spending $spending) {
            return $user->id == $spending->user_id;
        });
    }
}
