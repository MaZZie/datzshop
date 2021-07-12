<?php

namespace App\Http\Livewire\Admin;

use App\Http\Livewire\Traits\InteractWithModalTrait;
use Livewire\Component;

class Products extends Component
{
    use InteractWithModalTrait;

    public $products;

    protected $listeners = ['refreshProducts' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.products');
    }

    public function create()
    {
        $this->openModal('admin.forms.product-form');

    }

    public function edit($productId)
    {
        $this->openModal('admin.forms.product-form', ['productId' => $productId]);
    }

}
