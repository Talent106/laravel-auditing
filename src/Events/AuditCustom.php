<?php

namespace wilianx7\Auditing\Events;

use wilianx7\Auditing\Contracts\Auditable;

class AuditCustom
{
    /**
     * The Auditable model.
     *
     * @var \wilianx7\Auditing\Contracts\Auditable
     */
    public $model;

    /**
     * Create a new Auditing event instance.
     *
     * @param \wilianx7\Auditing\Contracts\Auditable $model
     */
    public function __construct(Auditable $model)
    {
        $this->model = $model;
    }
}
