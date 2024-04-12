<?php

namespace wilianx7\Auditing\Listeners;

use wilianx7\Auditing\Facades\Auditor;
use Illuminate\Support\Facades\Config;
use wilianx7\Auditing\Events\DispatchAudit;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProcessDispatchAudit implements ShouldQueue
{
    public function viaConnection(): string
    {
        return Config::get('audit.queue.connection', 'sync');
    }

    public function viaQueue(): string
    {
        return Config::get('audit.queue.queue', 'default');
    }

    public function withDelay(DispatchAudit $event): int
    {
        return Config::get('audit.queue.delay', 0);
    }

    public function handle(DispatchAudit $event)
    {
        Auditor::execute($event->model);
    }
}
