<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $content;
    public $subContent;
    public $buttonTxt;
    public $buttonLink;
    public function __construct($content = null, $subContent = null,  $buttonTxt = null,  $buttonLink = null)
    {
        $this->content = $content ?? 'content';
        $this->subContent = $subContent ?? 'subContent';
        $this->buttonTxt = $buttonTxt;
        $this->buttonLink = $buttonLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
