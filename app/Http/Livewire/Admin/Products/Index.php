<?php

namespace App\Http\Livewire\Admin\Products;

use App\Http\Livewire\Traits\InteractWithModalTrait;
use Livewire\Component;

class Index extends Component
{
    use InteractWithModalTrait;

    public $products;

    protected $listeners = ['refreshProducts' => '$refresh'];

    public function render()
    {
        return view('livewire.admin.products.index');
    }

    public function create()
    {
        $this->openModal('admin.products.edit', ['productId' => null]);

    }

    public function edit($productId)
    {
        $this->openModal('admin.products.edit', ['productId' => $productId]);
    }

}
