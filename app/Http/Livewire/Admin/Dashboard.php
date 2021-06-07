<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Traits\BasicTrait;
use Livewire\Component;

class Dashboard extends Component
{
    use BasicTrait;
    protected $listeners = ['refreshDing' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
    
}
