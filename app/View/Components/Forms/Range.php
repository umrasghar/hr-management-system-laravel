<?php

namespace App\View\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Range extends Component
{

    public $fieldLabel;
    public $fieldValue;
    public $fieldName;
    public $fieldId;
    public $fieldHelp;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fieldLabel, $fieldName, $fieldId, $fieldValue = null, $fieldHelp = null, $disabled = false)
    {
        $this->fieldLabel = $fieldLabel;
        $this->fieldValue = $fieldValue;
        $this->fieldName = $fieldName;
        $this->fieldId = $fieldId;
        $this->fieldHelp = $fieldHelp;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.forms.range');
    }

}
