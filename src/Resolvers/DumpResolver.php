<?php

namespace wilianx7\Auditing\Resolvers;

use wilianx7\Auditing\Contracts\Auditable;
use wilianx7\Auditing\Contracts\Resolver;

class DumpResolver implements Resolver
{
    public static function resolve(Auditable $auditable): string
    {
        return '';
    }
}
