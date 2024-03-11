<?php

namespace Eduka\UI;

use Eduka\UI\BladeDirectives;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use ImLiam\BladeHelper\Facades\BladeHelper;

class UIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /**
         * Adds all the <meta name="xxx" value="yyy" />
         */
        Blade::directive('ui_meta_names', function () {
            return '<?php foreach(Nereus::course()->meta_names as $tag => $value): ?>
<meta name="<?= e($tag) ?>" content="<?= e($value) ?>" />
<?php endforeach; ?>
<link rel="canonical" href="https://silver-surfer.masteringnova.com/" />';
        });

        BladeHelper::directive('ui_metas', function ($model) {
            return BladeDirectives::metas($model);
        });
    }

    public function register()
    {
        $this->app->bind('eduka-ui', function () {
            return new UI();
        });
    }
}
