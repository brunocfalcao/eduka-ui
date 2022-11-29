<?php

namespace Eduka\UI;

use Illuminate\Support\ServiceProvider;

class UIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerBladeComponents();
    }

    public function register()
    {
        //
    }

    protected function registerBladeComponents()
    {
        // Register blade components namespace.
        Blade::componentNamespace('Eduka\\UI\\Views\\Components', 'eduka');
    }
}
