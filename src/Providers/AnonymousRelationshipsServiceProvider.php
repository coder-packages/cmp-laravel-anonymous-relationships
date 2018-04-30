<?php

namespace Larapackages\AnonymousRelationships\Providers;

use Illuminate\Support\ServiceProvider;
use Larapackages\AnonymousRelationships\Generators\Identifier;

class AnonymousRelationshipsServiceProvider extends ServiceProvider
{
/**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Identifier::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}