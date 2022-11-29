<?php

namespace Eduka\UI;

use Eduka\Abstracts\Classes\EdukaServiceProvider;
use Illuminate\Support\Facades\Blade;

class UIServiceProvider extends EdukaServiceProvider
{
    public function boot()
    {
        $this->customViewNamespace(__DIR__.'/../resources/views', 'eduka-ui');

        $this->registerBladeComponents();

        parent::boot();
    }

    public function register()
    {
        //
    }

    protected function registerBladeComponents()
    {
        Blade::componentNamespace('Eduka\\UI\\Views\\Components', 'eduka');
    }
}
