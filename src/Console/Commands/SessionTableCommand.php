<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Session\Console\SessionTableCommand as BaseSessionTableCommand;

/**
 * Class SessionTableCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class SessionTableCommand extends BaseSessionTableCommand
{
    /**
     * @return void
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle(): void
    {
        $fullPath = $this->createBaseMigration();

        $this->files->put($fullPath, $this->files->get(__DIR__.'/../../stubs/database.stub'));

        $this->info('Migration created successfully!');

        $this->composer->dumpAutoloads();
    }
}
