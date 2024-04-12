<?php

namespace wilianx7\Auditing;

if (app() instanceof \Illuminate\Foundation\Application) {
    class_alias(\Illuminate\Foundation\Support\Providers\EventServiceProvider::class, '\wilianx7\Auditing\ServiceProvider');
} else {
    class_alias(\Laravel\Lumen\Providers\EventServiceProvider::class, '\wilianx7\Auditing\ServiceProvider');
}

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Config;
use wilianx7\Auditing\Events\AuditCustom;
use wilianx7\Auditing\Events\DispatchAudit;
use wilianx7\Auditing\Listeners\RecordCustomAudit;
use wilianx7\Auditing\Listeners\ProcessDispatchAudit;

class AuditingEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        AuditCustom::class => [
            RecordCustomAudit::class,
        ],
        DispatchAudit::class => [
            ProcessDispatchAudit::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
