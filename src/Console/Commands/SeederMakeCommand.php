<?php

declare(strict_types=1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Database\Console\Seeds\SeederMakeCommand as BaseSeederMakeCommand;

/**
 * Class SeederMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class SeederMakeCommand extends BaseSeederMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/seeder.stub';
    }
}
