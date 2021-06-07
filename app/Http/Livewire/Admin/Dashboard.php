<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Traits\Menu;
use Livewire\Component;

class Dashboard extends Component
{
    use Menu;
    protected $listeners = ['refreshDing' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
    
}
