<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\EventMakeCommand as BaseEventMakeCommand;

/**
 * Class EventMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class EventMakeCommand extends BaseEventMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/event.stub';
    }
}
