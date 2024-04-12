<?php

namespace wilianx7\Auditing\Resolvers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use wilianx7\Auditing\Contracts\Auditable;

class UserResolver implements \wilianx7\Auditing\Contracts\UserResolver
{
    /**
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public static function resolve()
    {
        $guards = Config::get('audit.user.guards', [
            \config('auth.defaults.guard')
        ]);

        foreach ($guards as $guard) {
            try {
                $authenticated = Auth::guard($guard)->check();
            } catch (\Exception $exception) {
                continue;
            }

            if (true === $authenticated) {
                return Auth::guard($guard)->user();
            }
        }

        return null;
    }
}
