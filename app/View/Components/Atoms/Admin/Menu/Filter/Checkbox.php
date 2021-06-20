<?php

namespace App\View\Components\Atoms\Admin\Menu\Filter;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $icon;
    public $name;

    public function __construct(
        $icon,
        $name
        )
    {
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.admin.menu.filter.checkbox');
    }
}
