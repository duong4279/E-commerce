<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $sub_title;
    public $link;
    public $image;
    public $status;

    public function mount()
    {
        $this->status = 1;
    }
    
    public function updated($field) 
    {
        $this->validateOnly($field, [
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
    }

    public function newSlider()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->sub_title = $this->sub_title;
        $slider->link = $this->link;
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('sliders',$imageName);
        $slider->image = $imageName;
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','Slider has been created successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-slider-component')->layout('layouts.admin');
    }
}
