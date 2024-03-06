<?php

namespace mywloop\nova;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class ForNovaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
        ], 'mywloop/nova');

        Nova::serving(function (ServingNova $event) {
            Nova::resourcesIn(resource_path('src/Nova'));
        });

    }

}