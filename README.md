## Laravel AMgrade Stubs

Replace all Laravel stubs according to AMgrade code style.

### Installation

```bash
composer require mcmatters/laravel-amgrade-stubs
```

If you don't use "Service Discovery" feature, then add into `config/app.php` into `providers` section
```php
McMatters\LaravelAmgradeStubs\ServiceProvider::class,
```

If you use something like `DevelopmentServiceProvider.php`, then your service provider must implement `DeferrableProvider` interface to overwrite default Laravel commands.

### Configuration

Run
```bash
php artisan vendor:publish
```

or copy from the package directory `config/amgrade-stubs.php` into `config` directory.
