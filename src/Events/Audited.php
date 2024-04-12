<?php

namespace wilianx7\Auditing\Events;

use wilianx7\Auditing\Contracts\Audit;
use wilianx7\Auditing\Contracts\Auditable;
use wilianx7\Auditing\Contracts\AuditDriver;

class Audited
{
    /**
     * The Auditable model.
     *
     * @var \wilianx7\Auditing\Contracts\Auditable
     */
    public $model;

    /**
     * Audit driver.
     *
     * @var \wilianx7\Auditing\Contracts\AuditDriver
     */
    public $driver;

    /**
     * The Audit model.
     *
     * @var \wilianx7\Auditing\Contracts\Audit|null
     */
    public $audit;

    /**
     * Create a new Audited event instance.
     *
     * @param \wilianx7\Auditing\Contracts\Auditable   $model
     * @param \wilianx7\Auditing\Contracts\AuditDriver $driver
     * @param \wilianx7\Auditing\Contracts\Audit       $audit
     */
    public function __construct(Auditable $model, AuditDriver $driver, Audit $audit = null)
    {
        $this->model = $model;
        $this->driver = $driver;
        $this->audit = $audit;
    }
}
