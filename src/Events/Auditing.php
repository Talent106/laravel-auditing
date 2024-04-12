<?php

namespace wilianx7\Auditing\Events;

use wilianx7\Auditing\Contracts\Auditable;
use wilianx7\Auditing\Contracts\AuditDriver;

class Auditing
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
     * Create a new Auditing event instance.
     *
     * @param \wilianx7\Auditing\Contracts\Auditable   $model
     * @param \wilianx7\Auditing\Contracts\AuditDriver $driver
     */
    public function __construct(Auditable $model, AuditDriver $driver)
    {
        $this->model = $model;
        $this->driver = $driver;
    }
}
