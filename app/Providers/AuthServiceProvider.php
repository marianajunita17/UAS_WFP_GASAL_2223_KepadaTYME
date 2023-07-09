<?php

namespace App\Providers;

use App\Models\Pengguna;
// use App\Models\User;
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

        Gate::define("checkcustomer", function(Pengguna $pengguna){
            if($pengguna->role == "owner"){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define("checkowner", function(Pengguna $pengguna){
            if($pengguna->role == "owner"){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define("checkstaff", function(Pengguna $pengguna){
            if($pengguna->role == "staff"){
                return true;
            }
            else{
                return false;
            }
        });

        Gate::define("checkpermission", function(Pengguna $pengguna){
            if($pengguna->role == "owner" || $pengguna->role == "staff"){
                return true;
            }
            else{
                return false;
            }
        });

    }
}
