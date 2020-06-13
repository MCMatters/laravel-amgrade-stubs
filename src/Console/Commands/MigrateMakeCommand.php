<?php

declare(strict_types=1);

namespace McMatters\LaravelAmgradeStubs\Console\Commands;

use Illuminate\Database\Console\Migrations\MigrateMakeCommand as BaseMigrateMakeCommand;
use Illuminate\Support\Composer;
use McMatters\LaravelAmgradeStubs\Database\Migrations\MigrationCreator;

/**
 * Class MigrateMakeCommand
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class MigrateMakeCommand extends BaseMigrateMakeCommand
{
    /**
     * MigrateMakeCommand constructor.
     *
     * @param \McMatters\LaravelAmgradeStubs\Database\Migrations\MigrationCreator $creator
     * @param \Illuminate\Support\Composer $composer
     */
    public function __construct(MigrationCreator $creator, Composer $composer)
    {
        parent::__construct($creator, $composer);
    }
}
