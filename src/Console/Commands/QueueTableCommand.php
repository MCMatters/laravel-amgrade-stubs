<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Queue\Console\TableCommand;

/**
 * Class QueueTableCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class QueueTableCommand extends TableCommand
{
    /**
     * @param string $path
     * @param string $table
     * @param string $tableClassName
     *
     * @return void
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function replaceMigration($path, $table, $tableClassName): void
    {
        $stub = str_replace(
            ['{{table}}', '{{tableClassName}}'],
            [$table, $tableClassName],
            $this->files->get(__DIR__.'/../../stubs/queue/jobs.stub')
        );

        $this->files->put($path, $stub);
    }
}
