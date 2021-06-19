<?php

namespace App\Http\Livewire\Admin\Forms;

use App\Http\Livewire\Traits\BasicTrait;
use App\Http\Livewire\Traits\InteractWithModalTrait;
use App\Models\Product;
use Livewire\Component;

class ProductForm extends Component
{
    use BasicTrait;

    public $product;
    public $productId;

    protected array $rules = [];

    public function rules()
    {
         return [
             'product.name' => 'required|min:6',
             'product.slug' => 'required|unique:products,slug,' . $this->productId,
             'product.stock' => 'numeric',
             'product.price' => '',
             'product.description' => 'required',
             'product.active' => '',
         ];
    }

    public function render()
    {
        return view('livewire.admin.forms.product-form');
    }

    public function mount()
    {
        $this->rules = $this->rules();
        $this->getProduct();
    }


    public function store(){
        $this->validate();
        if($this->productId)
        {
            $this->product->save();
            $this->banner($this->product->name.' is met succes aangepast!');
        }else{
            $this->product = Product::create($this->product);
            $this->banner($this->product->name.' is met succes aangemaakt!');
        }

        $this->emitUp('closeModal');
        $this->emitUp('refreshProducts');
    }

    public function edit($product)
    {
        $this->banner('Successfully edited!');
    }

    public function getProduct(){
        
        if($this->productId)
        {
            $this->product = Product::find($this->productId);
        }
        $this->product['has_stock'] = true;
        $this->product['sku'] = 'SKU';
        $this->product['product_type_id'] = 1;
    }
}
