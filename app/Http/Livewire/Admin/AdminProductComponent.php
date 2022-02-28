<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class AdminProductComponent extends Component
{
    use WithPagination;

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Product has been deleted successfully');
    }

    public function render()
    {
        $products = Product::paginate(15);
        return view('livewire.admin.admin-product-component',['products' => $products])->layout('layouts.admin');
    }
}
