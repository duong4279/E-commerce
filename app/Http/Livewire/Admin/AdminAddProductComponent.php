<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;


class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated ($field) 
    {
        $this->validateOnly($field, [
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // 'sale_price' => 'numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'image' => 'required',
            'category_id' => 'required',
        ]);
    }

    public function newProduct ()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // 'sale_price' => 'numeric',
            'SKU' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'image' => 'required',
            'category_id' => 'required',

        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Product has been created successfully');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories' => $categories])->layout('layouts.admin');
    }
}
