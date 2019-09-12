<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\PolicyMakeCommand as BasePolicyMakeCommand;

/**
 * Class PolicyMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class PolicyMakeCommand extends BasePolicyMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return $this->option('model')
            ? __DIR__.'/../../stubs/policy.stub'
            : __DIR__.'/../../stubs/policy.plain.stub';
    }
}
