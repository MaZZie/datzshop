<?php

namespace App\Http\Livewire\Admin\Products;

use App\Http\Livewire\Traits\BasicTrait;
use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{

    use BasicTrait;
    public $products;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.admin.products.product-index');
    }
}
