<?php

namespace App\View\Components\Atoms\Admin;

use Illuminate\View\Component;

class Button extends Component
{
    public $btnType;
    public $clickAction;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $btnType,
        $clickAction
        )
    {
        $this->btnType = $btnType;
        $this->clickAction = $clickAction;
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
