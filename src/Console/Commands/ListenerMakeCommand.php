<?php

declare(strict_types=1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ListenerMakeCommand as BaseListenerMakeCommand;

/**
 * Class ListenerMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ListenerMakeCommand extends BaseListenerMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        if ($this->option('queued')) {
            return $this->option('event')
                ? __DIR__.'/../../stubs/listener-queued.stub'
                : __DIR__.'/../../stubs/listener-queued-duck.stub';
        }

        return $this->option('event')
            ? __DIR__.'/../../stubs/listener.stub'
            : __DIR__.'/../../stubs/listener-duck.stub';
    }
}
