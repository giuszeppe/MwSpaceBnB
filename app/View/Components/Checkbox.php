<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $label;
    public $name;
    public $id;
    public $class;
    public $value;
    public $form;
    public $checked;
    public function __construct($label = null, $name = null, $id = null, $class = null, $value = null, $form = null, $checked = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        $this->class = $class;
        $this->value = $value;
        $this->form = $form;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
