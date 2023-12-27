<?php

namespace Eduka\UI;

use Illuminate\Support\ServiceProvider;

class UIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind('eduka-ui', function () {
            return new UI();
        });
    }
}