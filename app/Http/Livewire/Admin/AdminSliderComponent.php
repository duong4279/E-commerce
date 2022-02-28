<?php

namespace App\Http\Livewire\Admin;
use App\Models\HomeSlider;

use Livewire\Component;

class AdminSliderComponent extends Component
{

    public function deleteSlider($id)
    {
        $sliders = HomeSlider::find($id);
        $sliders->delete();
        session()->flash('message','Slider has been deleted successfully');
    }

    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-slider-component',['sliders' => $sliders])->layout('layouts.admin');
    }
}
