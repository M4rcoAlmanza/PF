<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Terapia;
use Illuminate\Support\Facades\Gate;
use App\Policies\TerapiaPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Terapia::class => TerapiaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('editar-terapia', function(User $user, Terapia $terapia){
            return $user->id === $terapia->user->id
                ? Response::allow()
                : Response::deny('Este no es tu paciente.');
        });
    }
}
