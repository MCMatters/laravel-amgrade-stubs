<?php

declare(strict_types = 1);

namespace McMatters\LaravelAmgradeStubs;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use McMatters\LaravelAmgradeStubs\Console\Commands\{
    CacheTableCommand, ChannelMakeCommand, ConsoleMakeCommand,
    ControllerMakeCommand, EventMakeCommand, ExceptionMakeCommand,
    FactoryMakeCommand, JobMakeCommand, ListenerMakeCommand, MailMakeCommand,
    MiddlewareMakeCommand, MigrateMakeCommand, ModelMakeCommand,
    NotificationMakeCommand, NotificationTableCommand, ObserverMakeCommand,
    PolicyMakeCommand, ProviderMakeCommand, QueueFailedTableCommand,
    QueueTableCommand, RequestMakeCommand, ResourceMakeCommand, RuleMakeCommand,
    SeederMakeCommand, SessionTableCommand, TestMakeCommand
};
use McMatters\LaravelAmgradeStubs\Database\Migrations\MigrationCreator;

use function array_values;

use const false;

/**
 * Class ServiceProvider
 *
 * @package McMatters\LaravelAmgradeStubs\Console\Commands
 */
class ServiceProvider extends BaseServiceProvider  implements DeferrableProvider
{
    /**
     * @var array
     */
    protected $commands = [
        'CacheTable' => 'command.cache.table',
        'ChannelMake' => 'command.channel.make',
        'ConsoleMake' => 'command.console.make',
        'ControllerMake' => 'command.controller.make',
        'EventMake' => 'command.event.make',
        'ExceptionMake' => 'command.exception.make',
        'FactoryMake' => 'command.factory.make',
        'JobMake' => 'command.job.make',
        'ListenerMake' => 'command.listener.make',
        'MailMake' => 'command.mail.make',
        'MiddlewareMake' => 'command.middleware.make',
        'MigrateMake' => 'command.migrate.make',
        'ModelMake' => 'command.model.make',
        'NotificationMake' => 'command.notification.make',
        'NotificationTable' => 'command.notification.table',
        'ObserverMake' => 'command.observer.make',
        'PolicyMake' => 'command.policy.make',
        'ProviderMake' => 'command.provider.make',
        'QueueFailedTable' => 'command.queue.failed-table',
        'QueueTable' => 'command.queue.table',
        'RequestMake' => 'command.request.make',
        'ResourceMake' => 'command.resource.make',
        'RuleMake' => 'command.rule.make',
        'SeederMake' => 'command.seeder.make',
        'SessionTable' => 'command.session.table',
        'TestMake' => 'command.test.make',
    ];

    /**
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/amgrade-stubs.php' => $this->app->configPath(),
            ], 'config');
        }
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/amgrade-stubs.php', 'amgrade-stubs');

        $commands = $this->app['config']->get('amgrade-stubs.commands');

        foreach ($this->commands as $command => $abstract) {
            if ($commands[$command] ?? false) {
                $this->{"register{$command}"}($abstract);
            }
        }
    }

    /**
     * @return array
     */
    public function provides(): array
    {
        return array_values($this->commands);
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerCacheTable(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new CacheTableCommand($app['files'], $app['composer']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerChannelMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ChannelMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerConsoleMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ConsoleMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerControllerMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ControllerMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerEventMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new EventMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerExceptionMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ExceptionMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerFactoryMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new FactoryMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerJobMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new JobMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerListenerMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ListenerMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerMailMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new MailMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerMiddlewareMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new MiddlewareMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerMigrateMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new MigrateMakeCommand(
                new MigrationCreator($app['files']),
                $app['composer']
            );
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerModelMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ModelMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerNotificationMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new NotificationMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerNotificationTable(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new NotificationTableCommand($app['files'], $app['composer']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerObserverMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ObserverMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerPolicyMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new PolicyMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerProviderMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ProviderMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerQueueFailedTable(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new QueueFailedTableCommand($app['files'], $app['composer']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerQueueTable(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new QueueTableCommand($app['files'], $app['composer']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerRequestMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new RequestMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerResourceMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new ResourceMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerRuleMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new RuleMakeCommand($app['files']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerSeederMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new SeederMakeCommand($app['files'], $app['composer']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerSessionTable(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new SessionTableCommand($app['files'], $app['composer']);
        });
    }

    /**
     * @param string $abstract
     *
     * @return void
     */
    protected function registerTestMake(string $abstract): void
    {
        $this->app->singleton($abstract, function ($app) {
            return new TestMakeCommand($app['files']);
        });
    }
}
