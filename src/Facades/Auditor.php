<?php

namespace wilianx7\Auditing\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \wilianx7\Auditing\Contracts\AuditDriver auditDriver(\wilianx7\Auditing\Contracts\Auditable $model);
 * @method static void execute(\wilianx7\Auditing\Contracts\Auditable $model);
 */
class Auditor extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return \wilianx7\Auditing\Contracts\Auditor::class;
    }
}
