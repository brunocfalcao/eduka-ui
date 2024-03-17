<?php

namespace Eduka\UI;

use Illuminate\Support\ServiceProvider;
use ImLiam\BladeHelper\Facades\BladeHelper;

class UIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /**
         * Adds all the <meta name="xxx" value="yyy" />
         */
        /*
        BladeHelper::directive('ui_metas', function ($model) {
            return BladeDirectives::metas($model);
        });
        */
    }

    public function register()
    {
        $this->app->bind('eduka-ui', function () {
            return new UI();
        });
    }
}
