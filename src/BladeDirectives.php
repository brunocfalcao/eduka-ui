<?php

namespace Eduka\UI;

class BladeDirectives
{
    public function __construct()
    {
        //
    }

    public static function metas($model)
    {
        $metaTags = $model->metas();

        $html = "";

        foreach ((array)$metaTags as $key => $value) {
            // 'name|twitter:description' => $this->description,
            $parts = explode('|', $key);
            $html .= "<meta {$parts[0]}=\"{$parts[1]}\" content=\"{$value}\" />";
        }

        return $html;
    }
}
