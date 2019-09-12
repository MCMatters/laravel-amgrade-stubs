<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ObserverMakeCommand as BaseObserverMakeCommand;

/**
 * Class ObserverMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ObserverMakeCommand extends BaseObserverMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return $this->option('model')
            ? __DIR__.'/../../stubs/observer.stub'
            : __DIR__.'/../../stubs/observer.plain.stub';
    }
}
