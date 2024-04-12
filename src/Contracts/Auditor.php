<?php

namespace wilianx7\Auditing\Contracts;

interface Auditor
{
    /**
     * Get an audit driver instance.
     *
     * @param \wilianx7\Auditing\Contracts\Auditable $model
     *
     * @return AuditDriver
     */
    public function auditDriver(Auditable $model): AuditDriver;

    /**
     * Perform an audit.
     *
     * @param \wilianx7\Auditing\Contracts\Auditable $model
     *
     * @return void
     */
    public function execute(Auditable $model);
}
