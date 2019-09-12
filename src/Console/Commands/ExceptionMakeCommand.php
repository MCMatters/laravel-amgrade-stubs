<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ExceptionMakeCommand as BaseExceptionMakeCommand;

/**
 * Class ExceptionMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ExceptionMakeCommand extends BaseExceptionMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        if ($this->option('render')) {
            return $this->option('report')
                ? __DIR__.'/../../stubs/exception-render-report.stub'
                : __DIR__.'/../../stubs/exception-render.stub';
        }

        return $this->option('report')
            ? __DIR__.'/../../stubs/exception-report.stub'
            : __DIR__.'/../../stubs/exception.stub';
    }
}
