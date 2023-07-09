<?php

namespace App\Providers;

use App\Models\User;
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

        Gate::define("checkcustomer", function(User $user){
            if($user->role == "owner"){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define("checkowner", function(User $user){
            if($user->role == "owner"){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define("checkstaff", function(User $user){
            if($user->role == "staff"){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define("checkpermission", function(User $user){
            if($user->role == "owner" || $user->role == "staff"){
                return true;
            }
            else{
                return false;
            }
        });

    }
}
