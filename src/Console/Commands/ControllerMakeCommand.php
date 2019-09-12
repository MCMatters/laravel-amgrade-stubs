<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Routing\Console\ControllerMakeCommand as BaseControllerMakeCommand;

use const null;

/**
 * Class ControllerMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ControllerMakeCommand extends BaseControllerMakeCommand
{
    /**
     * @return string
     */
    protected function getStub(): string
    {
        $stub = null;

        if ($this->option('parent')) {
            $stub = __DIR__.'/../../stubs/controller.nested.stub';
        } elseif ($this->option('model')) {
            $stub = __DIR__.'/../../stubs/controller.model.stub';
        } elseif ($this->option('invokable')) {
            $stub = __DIR__.'/../../stubs/controller.invokable.stub';
        } elseif ($this->option('resource')) {
            $stub = __DIR__.'/../../stubs/controller.stub';
        }

        if (null === $stub && $this->option('api')) {
            $stub = __DIR__.'/../../stubs/controller.api.stub';
        } elseif (null !== $stub && $this->option('api') && !$this->option('invokable')) {
            $stub = str_replace('.stub', '.api.stub', $stub);
        }

        return $stub ?? __DIR__.'/../../stubs/controller.plain.stub';
    }
}
