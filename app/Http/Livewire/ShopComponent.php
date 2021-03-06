<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use Cart;

class ShopComponent extends Component
{
    use WithPagination;
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public function mount() 
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->min_price = 0;
        $this->max_price = 20000000;
    }
    
    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }
    
    public function render()
    {
        if($this->sorting == "date") 
        {
            $products = Product::whereBetween('price',[$this->min_price, $this->max_price])->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        else if($this->sorting == "price")
        {
            $products = Product::whereBetween('price',[$this->min_price, $this->max_price])->orderBy('price','ASC')->paginate($this->pagesize);
        }
        else if($this->sorting == "price-desc")
        {
            $products = Product::whereBetween('price',[$this->min_price, $this->max_price])->orderBy('price','DESC')->paginate($this->pagesize);
        }
        else 
        {
            $products = Product::whereBetween('price',[$this->min_price, $this->max_price])->paginate($this->pagesize);
        }

        $categories = Category::all();
        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
