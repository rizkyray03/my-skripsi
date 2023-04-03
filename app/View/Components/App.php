<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $sidebar;

    public function __construct($title, $sidebar = 'hide')
    {
        $this->title = $title;
        $this->sidebar = $sidebar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
