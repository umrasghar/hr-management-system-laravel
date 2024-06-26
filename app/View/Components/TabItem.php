<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabItem extends Component
{

    public $link;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link, $active = false)
    {
        $this->link = $link;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.tab-item');
    }

}
