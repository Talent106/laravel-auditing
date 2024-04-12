<?php

namespace wilianx7\Auditing\Resolvers;

use Illuminate\Support\Facades\Request;
use wilianx7\Auditing\Contracts\Auditable;
use wilianx7\Auditing\Contracts\Resolver;

class UserAgentResolver implements Resolver
{
    public static function resolve(Auditable $auditable)
    {
        return $auditable->preloadedResolverData['user_agent'] ?? Request::header('User-Agent');
    }
}
