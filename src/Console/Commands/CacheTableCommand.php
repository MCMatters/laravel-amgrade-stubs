<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Cache\Console\CacheTableCommand as BaseCacheTableCommand;

/**
 * Class CacheTableCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class CacheTableCommand extends BaseCacheTableCommand
{
    /**
     * @return void
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle(): void
    {
        $fullPath = $this->createBaseMigration();

        $this->files->put($fullPath, $this->files->get(__DIR__.'/../../stubs/cache.stub'));

        $this->info('Migration created successfully!');

        $this->composer->dumpAutoloads();
    }
}
