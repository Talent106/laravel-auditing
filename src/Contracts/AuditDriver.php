<?php

namespace wilianx7\Auditing\Contracts;

interface AuditDriver
{
    /**
     * Perform an audit.
     *
     * @param \wilianx7\Auditing\Contracts\Auditable $model
     *
     * @return \wilianx7\Auditing\Contracts\Audit
     */
    public function audit(Auditable $model): ?Audit;

    /**
     * Remove older audits that go over the threshold.
     *
     * @param \wilianx7\Auditing\Contracts\Auditable $model
     *
     * @return bool
     */
    public function prune(Auditable $model): bool;
}
