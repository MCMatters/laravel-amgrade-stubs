<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ProviderMakeCommand as BaseProviderMakeCommand;

/**
 * Class ProviderMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ProviderMakeCommand extends BaseProviderMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/provider.stub';
    }
}
