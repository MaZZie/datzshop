<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{
    public $products;

    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products.show');
    }
}
