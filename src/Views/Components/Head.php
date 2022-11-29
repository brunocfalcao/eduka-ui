<?php

namespace Eduka\Nereus\Views\Components;

use Eduka\Pathfinder\Pathfinder;
use Illuminate\View\Component;

class Head extends Component
{
    public $title;

    public $paddle = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null)
    {
        if ($title) {
            $this->title = $title;

            return;
        }

        if (Pathfinder::inFrontend()) {
            $this->title = course()->name;

            return;
        }

        if (Pathfinder::inBackend()) {
            $this->title = env('APP_NAME');

            return;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('eduka::components.head');
    }
}
