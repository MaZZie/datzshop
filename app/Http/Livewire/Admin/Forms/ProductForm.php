<?php

namespace App\Http\Livewire\Admin\Forms;

use App\Http\Livewire\Traits\InteractWithModalTrait;
use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{

    public $productname;
    public $slug;
    public $stock;
    public $price;
    public $description;


    protected $rules = [
        'productname' => 'required|min:6',
        'slug' => 'required|unique:products,slug',
        'stock' => 'numeric'
    ];

    public function render()
    {
        return view('livewire.admin.forms.product-form');
    }


    public function store(){
        $this->validate();
        Product::create([
            'product_type_id' => 1,
            'name' => $this->productname,
            'slug' => $this->slug,
            'price' => $this->price,
            'has_stock' => true,
            'stock' => $this->stock,
            'sku' => 'sku',
            'description' => $this->description,
        ]);

        // $this->closeModal();
    }
    public function close(){
        // $this->closeModal();
        }
}
