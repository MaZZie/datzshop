<?php

namespace App\View\Components\Atoms\Admin\Menu;

use App\Http\Livewire\Traits\Menu;
use Illuminate\View\Component;

class Link extends Component
{
    use Menu;
    
    public $name;
    public $route;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $route,
        $icon,
    )
    {
        $this->name = $name;
        $this->route = $route;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.admin.menu.link');
    }
}
