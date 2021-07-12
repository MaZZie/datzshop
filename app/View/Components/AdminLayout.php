<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $modal;
    public $menu;
    public function __construct($modal = false, $menu = true)
    {
        $this->modal = $modal;
        $this->menu = $menu;
    }
     
    public function render()
    {
        return view('layouts.admin');
    }
}
