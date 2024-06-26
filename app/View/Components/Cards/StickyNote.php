<?php

namespace App\View\Components\Cards;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StickyNote extends Component
{

    public $stickyNote;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($stickyNote)
    {
        $this->stickyNote = $stickyNote;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.cards.sticky-note');
    }

}
