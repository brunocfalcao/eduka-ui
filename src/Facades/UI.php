<?php

namespace Eduka\UI\Facades;

use Illuminate\Support\Facades\Facade;

class UI extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'eduka-ui';
    }
}
