<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $type, $name, $label;
    public function __construct($type, $name, $label)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
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
