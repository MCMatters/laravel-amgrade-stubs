<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\RequestMakeCommand as BaseRequestMakeCommand;

/**
 * Class RequestMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class RequestMakeCommand extends BaseRequestMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/request.stub';
    }
}
