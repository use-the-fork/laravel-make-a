<?php

namespace UseTheFork\LaravelMakeA;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use UseTheFork\LaravelMakeA\Commands\LaravelMakeACommand;

class LaravelMakeAServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-make-a')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-make-a_table')
            ->hasCommand(LaravelMakeACommand::class);
    }
}
