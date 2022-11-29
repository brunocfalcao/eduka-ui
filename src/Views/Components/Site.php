<?php

namespace Eduka\UI\Views\Components;

use Illuminate\View\Component;

class Site extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('eduka-ui::components.site');
    }
}
