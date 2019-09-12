<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Database\Console\Factories\FactoryMakeCommand as BaseFactoryMakeCommand;

/**
 * Class FactoryMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class FactoryMakeCommand extends BaseFactoryMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/factory.stub';
    }
}
