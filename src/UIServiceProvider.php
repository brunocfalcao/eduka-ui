<?php

namespace Eduka\UI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
    }

    public function register()
    {
        $this->app->bind('eduka-ui', function () {
            return new UI();
        });
    }
}
