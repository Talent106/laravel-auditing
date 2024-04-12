<?php

namespace wilianx7\Auditing\Contracts;

interface Resolver
{
    public static function resolve(Auditable $auditable);
}
