<?php

namespace wilianx7\Auditing\Tests\fixtures;

use wilianx7\Auditing\Contracts\Auditable;
use wilianx7\Auditing\Contracts\Resolver;

class TenantResolver implements Resolver
{
    public static function resolve(Auditable $auditable)
    {
        return 1;
    }
}
