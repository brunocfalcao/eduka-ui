<?php

namespace Eduka\UI\Views\Components;

use Illuminate\View\Component;

class Head extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('eduka-ui::components.head');
    }
}
