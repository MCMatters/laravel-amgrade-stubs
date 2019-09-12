<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ConsoleMakeCommand as BaseConsoleMakeCommand;

/**
 * Class ConsoleMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ConsoleMakeCommand extends BaseConsoleMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/console.stub';
    }
}
