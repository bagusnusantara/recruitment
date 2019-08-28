<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isAdmin', function($user){
          return $user->roles == 'admin';
        });
        $gate->define('isClient', function($user){
          return $user->roles == 'client';
        });
        $gate->define('isJobseeker', function($user){
          return $user->roles == 'jobseeker';
        });
        $gate->define('isHRD', function($user){
          return $user->roles == 'hrd';
        });
        $gate->define('isAccessor', function($user){
          return $user->roles == 'accessor';
        });
        $gate->define('isPegawai', function($user){
            return $user->roles == 'pegawai';
        });
    }
}
