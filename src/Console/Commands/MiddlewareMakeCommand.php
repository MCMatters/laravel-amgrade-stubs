<?php

declare(strict_types=1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Routing\Console\MiddlewareMakeCommand as BaseMiddlewareMakeCommand;

/**
 * Class MiddlewareMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class MiddlewareMakeCommand extends BaseMiddlewareMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/middleware.stub';
    }
}
