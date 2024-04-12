<?php

namespace wilianx7\Auditing\Listeners;

use wilianx7\Auditing\Facades\Auditor;

class RecordCustomAudit
{
    public function handle(\wilianx7\Auditing\Contracts\Auditable $model)
    {
        Auditor::execute($model);
    }
}
