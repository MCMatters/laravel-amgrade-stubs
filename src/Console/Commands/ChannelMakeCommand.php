<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ChannelMakeCommand as BaseChannelMakeCommand;

/**
 * Class ChannelMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ChannelMakeCommand extends BaseChannelMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return __DIR__.'/../../stubs/channel.stub';
    }
}
