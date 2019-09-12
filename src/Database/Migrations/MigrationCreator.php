<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs\Database\Migrations;

use Illuminate\Database\Migrations\MigrationCreator as BaseMigrationCreator;

/**
 * Class MigrationCreator
 *
 * @package McMatters\LaravelAmgradeStubs\Database\Migrations
 */
class MigrationCreator extends BaseMigrationCreator
{
    /**
     * @return string
     */
    public function stubPath(): string
    {
        return __DIR__.'/../../stubs/migration';
    }
}
