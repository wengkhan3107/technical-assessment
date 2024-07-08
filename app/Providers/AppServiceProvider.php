<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        // Gate::define('check-subscription', function (User $user, Subscription $subscription) {
        //     return $user->id === $subscription->user_id;
        // });
    }

    public function test_user_data($user_id){
        if($user_id ==1){
            return true;
        }

        else{
            return false;
        }
        
    }
}
