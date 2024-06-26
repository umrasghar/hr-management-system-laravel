<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonCancel extends Component
{

    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link = 'javascript:;')
    {
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.forms.button-cancel');
    }

}
