<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type, $name, $label, $value;
    public function __construct($type, $name, $label, $value = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
