<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\JobMakeCommand as BaseJobMakeCommand;

/**
 * Class JobMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class JobMakeCommand extends BaseJobMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return $this->option('sync')
            ? __DIR__.'/../../stubs/job.stub'
            : __DIR__.'/../../stubs/job-queued.stub';
    }
}
