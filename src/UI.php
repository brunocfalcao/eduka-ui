<?php

namespace Eduka\UI;

class UI
{
    public function __construct()
    {
        /**
         * UI is called via a facade, so the __construct() is not
         * always called on each UI method. Nothing here then.
         */
    }

    public function test()
    {
        info('ok');
    }
}
