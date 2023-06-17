<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot()
    {
        //
        // $this->registerPolicies();

        // Gate::define('isAdmin', function ($user) {
        //     return $user->role == 'admin';
        // });

        // Gate::define('isBidan', function ($user) {
        //     return $user->role == 'bidan';
        // });

        // Gate::define('ispegawai', function ($user) {
        //     return $user->role == 'pegawai';
        // });

        // Gate::define('ispengunjung', function ($user) {
        //     return $user->role == 'pengunjung';
        // });
    }
}
