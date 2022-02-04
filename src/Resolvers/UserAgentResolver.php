<?php

namespace OwenIt\Auditing\Resolvers;

use Illuminate\Support\Facades\Request;
use OwenIt\Auditing\Contracts\Resolver;

class UserAgentResolver implements Resolver
{
    public static function resolve()
    {
        return Request::header('User-Agent');
    }
}
