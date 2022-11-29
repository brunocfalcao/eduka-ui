<?php

namespace Eduka\UI\Views\Components;

use Illuminate\View\Component;

class Head extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('eduka-ui::components.head');
    }
}
