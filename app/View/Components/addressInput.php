<?php

namespace App\View\Components;

use Illuminate\View\Component;

class addressInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $required;
    public $value;
    public function __construct($required = "true", $value = "")
    {
        $this->required = $required;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.address-input');
    }
}
