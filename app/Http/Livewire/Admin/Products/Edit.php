<?php

namespace App\Http\Livewire\Admin\Products;

use App\Http\Livewire\Traits\BasicTrait;
use App\Http\Livewire\Traits\InteractWithModalTrait;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class Edit extends Component
{
    use BasicTrait;

    public $product;
    public $productId;
    public $showStock;

    protected array $rules = [];

    public function rules()
    {
         return [
             'product.name' => 'required|min:6',
             'product.product_type_id' => 'required',
             'product.sku' => 'required',
             'product.slug' => 'required|unique:products,slug,' . $this->productId,
             'product.has_stock' => 'sometimes|required|boolean',
             'product.stock' => 'sometimes|required|numeric',
             'product.price' => '',
             'product.description' => 'required',
             'product.active' => '',
         ];
    }

    public function render()
    {
        return view('livewire.admin.products.edit');
    }

    public function mount()
    {
        $this->rules = $this->rules();
        $this->getProduct();
        $this->toggleStock();
    }

    public function updatedProductName($name){
        if($this->product->slug == '')
            $this->product->slug = Str::slug($name);
    }

    public function updatedProductHasStock($has_stock){
        $this->toggleStock();
    }

    public function toggleStock(){
        if($this->product->has_stock){
            $this->showStock = "true";
        }else{
            $this->showStock = "false";
        }
    }
    public function store(){
        $this->validate();
        // dd($this->product);
        if($this->product->has_stock === null){
            $this->product->has_stock = 0;
        }

        if($this->product->stock === null){
            $this->product->stock = 0;
        }

        if($this->product->active === null){
            $this->product->active = 0;
        }

        if($this->productId)
        {
            $this->product->save();
            $this->banner($this->product->name.' is met succes aangepast!');
        }else{
            $this->product->save();
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
        }else{
            $this->product = new Product();
        }
    }
}
