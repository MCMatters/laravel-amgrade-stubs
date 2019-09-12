<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\TestMakeCommand as BaseTestMakeCommand;

/**
 * Class TestMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class TestMakeCommand extends BaseTestMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        if ($this->option('unit')) {
            return __DIR__.'/../../stubs/unit-test.stub';
        }

        return __DIR__.'/../../stubs/test.stub';
    }
}
