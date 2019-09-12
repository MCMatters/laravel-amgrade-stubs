<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\NotificationMakeCommand as BaseNotificationMakeCommand;

/**
 * Class NotificationMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class NotificationMakeCommand extends BaseNotificationMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return $this->option('markdown')
            ? __DIR__.'/../../stubs/markdown-notification.stub'
            : __DIR__.'/../../stubs/notification.stub';
    }
}
