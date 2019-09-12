<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\MailMakeCommand as BaseMailMakeCommand;

/**
 * Class MailMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class MailMakeCommand extends BaseMailMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        return $this->option('markdown')
            ? __DIR__.'/../../stubs/markdown-mail.stub'
            : __DIR__.'/../../stubs/mail.stub';
    }
}
