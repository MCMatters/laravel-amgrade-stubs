<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ResourceMakeCommand as BaseResourceMakeCommand;

/**
 * Class ResourceMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ResourceMakeCommand extends BaseResourceMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return $this->collection()
            ? __DIR__.'/../../stubs/resource-collection.stub'
            : __DIR__.'/../../stubs/resource.stub';
    }
}
