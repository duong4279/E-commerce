<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Category;


class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lastest_products = Product::orderBy('created_at','DESC')->get()->take(6);
        $active_categories = Category::where('status','show')->get();
        return view('livewire.home-component', ['sliders' => $sliders, 'lastest_products' => $lastest_products,
         'active_categories' => $active_categories])->layout('layouts.base');
    }
}
