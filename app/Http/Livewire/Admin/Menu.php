<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Traits\MenuTrait;
use Livewire\Component;

class Menu extends Component
{
    use MenuTrait;

    public function render()
    {
        return view('livewire.admin.menu');
    }
}
