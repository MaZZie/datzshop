<?php

namespace App\View\Components\Atoms\Admin\Form;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $placeholder;
    public $label;
    public $singleCol;
    public $name;
    public $show;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $type,
        $placeholder,
        $label,
        $name,
        $singleCol = false,
        $show = "true"
    )
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->label = $label;
        $this->name = $name;
        $this->singleCol = $singleCol;
        $this->show = $show;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.admin.form.input');
    }
}
