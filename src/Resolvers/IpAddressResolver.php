<?php

namespace wilianx7\Auditing\Resolvers;

use Illuminate\Support\Facades\Request;
use wilianx7\Auditing\Contracts\Auditable;
use wilianx7\Auditing\Contracts\Resolver;

class IpAddressResolver implements Resolver
{
    public static function resolve(Auditable $auditable): string
    {
        return $auditable->preloadedResolverData['ip_address'] ?? Request::ip();
    }
}
