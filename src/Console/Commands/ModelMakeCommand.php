<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as BaseModelMakeCommand;
use Illuminate\Support\Str;

use function class_basename, str_replace;

/**
 * Class ModelMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ModelMakeCommand extends BaseModelMakeCommand
{
    /**
     * @param string $name
     *
     * @return string
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function buildClass($name): string
    {
        $class = parent::buildClass($name);

        return str_replace('DummyModelTable', $this->getModelTable(), $class);
    }

    /**
     * @return void
     */
    protected function createMigration()
    {
        $table = $this->getModelTable();

        if ($this->option('pivot')) {
            $table = Str::singular($table);
        }

        $this->call('make:migration', [
            'name' => "create_{$table}_table",
            '--create' => $table,
        ]);
    }

    /**
     * @return string
     */
    protected function getStub(): string
    {
        if ($this->option('pivot')) {
            return __DIR__.'/../../stubs/pivot.model.stub';
        }

        return __DIR__.'/../../stubs/model.stub';
    }

    /**
     * @return string
     */
    protected function getModelTable(): string
    {
        return Str::snake(
            Str::pluralStudly(class_basename($this->argument('name')))
        );
    }
}
