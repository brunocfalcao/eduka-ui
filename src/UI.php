<?php

namespace Eduka\UI;

use Eduka\Nereus\Facades\Nereus;

class UI
{
    private $model;

    public function __construct()
    {
        //
    }

    public function renderHeaders()
    {
        $context = Nereus::context();

        $this->renderTitle();

        if ($context['type'] == 'course') {
            $this->model = Nereus::course();

            $this->renderMetas();
        }

        $this->renderClarityJS();
    }

    private function renderClarityJS()
    {
        $code = Nereus::course()->clarity_code;
        echo <<<HTML
<!-- clarity -->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "$code");
</script>
<!-- /clarity -->
HTML;
    }

    private function renderTitle()
    {
        $course = Nereus::course()->name;
        echo <<<HTML
        <title>$course</title>\n
HTML;
    }

    private function renderMetas()
    {
        $metaTags = $this->model->metas;

        $html = '';

        foreach ((array) $metaTags as $key => $value) {
            // 'name|twitter:description' => $this->description,
            $parts = explode('|', $key);
            $tagName = $parts[0];
            $tagValue = $parts[1];
            $content = $value;
            echo <<<HTML
            <meta $tagName="$tagValue" content="$content" />\n
HTML;
        }
    }
}
