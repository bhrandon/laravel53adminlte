<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use App\Permissao;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
            //'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate) {
        $this->registerPolicies();

        $permissaos = Permissao::with('roles')->get();

        foreach ($permissaos as $permissao) {
            $gate->define($permissao->name, function(User $user) use ($permissao) {
                return $user->hasPermission($permissao);
            });
        }

        $gate->before(function(User $user, $ability) {
            if($user->hasAnyRoles('adm'))
                return true;
        });
    }

}
