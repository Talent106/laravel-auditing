<?php

namespace wilianx7\Auditing\Events;

use wilianx7\Auditing\Contracts\Auditable;

class DispatchAudit
{
    /**
     * The Auditable model.
     *
     * @var Auditable
     */
    public $model;

    /**
     * Create a new DispatchAudit event instance.
     *
     * @param Auditable $model
     */
    public function __construct(Auditable $model)
    {
        $this->model = $model;
    }
}
