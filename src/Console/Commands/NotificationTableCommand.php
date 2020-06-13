<?php

declare(strict_types=1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Notifications\Console\NotificationTableCommand as BaseNotificationTableCommand;

/**
 * Class NotificationTableCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class NotificationTableCommand extends BaseNotificationTableCommand
{
    /**
     * @return void
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle(): void
    {
        $fullPath = $this->createBaseMigration();

        $this->files->put(
            $fullPath,
            $this->files->get(__DIR__.'/../../stubs/notifications.stub')
        );

        $this->info('Migration created successfully!');

        $this->composer->dumpAutoloads();
    }
}
