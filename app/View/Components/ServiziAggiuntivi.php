<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiziAggiuntivi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $apartment;
    public function __construct($apartment)
    {
        $this->apartment = $apartment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.servizi-aggiuntivi');
    }
}
