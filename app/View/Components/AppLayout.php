<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? config('app.name', 'Laravel');
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
