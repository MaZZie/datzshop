<?php

namespace App\Http\Livewire\Admin\Products;

use App\Http\Livewire\Traits\BasicTrait;
use App\Http\Livewire\Traits\InteractWithModalTrait;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{

    use BasicTrait;
    use InteractWithModalTrait;

    public $products;

    protected $listeners = ['refreshProducts' => '$refresh'];

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.admin.products.product-index');
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
