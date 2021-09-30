<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputField extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $class;
    public $id;
    public $value;
    public $placeholder;
    public $required;
    public $type;
    public $label;
    public function __construct($name,$class,$id,$value,$placeholder,$required,$type,$label)
    {
        $this->name = $name ?? '';
        $this->class = $class ?? '';
        $this->id = $id ?? '';
        $this->value = $value ?? '';
        $this->placeholder = $placeholder ?? '';
        $this->required = $required ?? '';
        $this->type = $type ?? '';
        $this->label = $label ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-field');
    }
}
