<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public $cardLink;
    public $cardTitle;

    public $cardImage;
    public function __construct($cardLink, $cardTitle, $cardImage)
    {
        $this->cardLink = $cardLink;
        $this->cardTitle = $cardTitle;
        $this->cardImage = $cardImage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
