<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Queue\Console\FailedTableCommand;

/**
 * Class QueueFailedTableCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class QueueFailedTableCommand extends FailedTableCommand
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
            $this->files->get(__DIR__.'/../../stubs/queue/failed_jobs.stub')
        );

        $this->files->put($path, $stub);
    }
}
