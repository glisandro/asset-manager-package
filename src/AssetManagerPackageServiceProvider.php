<?php

namespace GLisandro\AssetManagerPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use GLisandro\AssetManagerPackage\Commands\AssetManagerPackageCommand;

class AssetManagerPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('asset-manager-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_asset-manager-package_table')
            ->hasCommand(AssetManagerPackageCommand::class);
    }
}
