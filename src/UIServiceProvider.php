<?php

namespace Eduka\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ui');
        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components/email', 'email');
        Blade::anonymousComponentPath(__DIR__.'/../resources/views/components/dashboard', 'dashboard');
    }

    public function register()
    {
        $this->app->bind('eduka-ui', function () {
            return new UI();
        });
    }
}
