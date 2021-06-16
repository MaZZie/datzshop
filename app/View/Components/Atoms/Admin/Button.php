<?php

namespace App\View\Components\Atoms\Admin;

use Illuminate\View\Component;

class Button extends Component
{
    public $btnType;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $btnType
        )
    {
        $this->btnType = $btnType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.admin.button');
    }
}
