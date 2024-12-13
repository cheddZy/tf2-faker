<?php

namespace cheddzy\TF2Faker;

use Faker\Generator;
use Illuminate\Support\Facades\App;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TF2FakerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tf2-faker');
        App::make(Generator::class)->addProvider(new TF2Faker(App::make(Generator::class)));
    }
}
