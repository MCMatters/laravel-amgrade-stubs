<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\RuleMakeCommand as BaseRuleMakeCommand;

/**
 * Class RuleMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class RuleMakeCommand extends BaseRuleMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/rule.stub';
    }
}
