<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditSliderComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $sub_title;
    public $link;
    public $image;
    public $status;
    public $new_image;
    public $slider_id;

    public function mount($slider_id)
    {
        $slider = HomeSlider::find($slider_id);
        $this->title = $slider->title;
        $this->sub_title = $slider->sub_title;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;
    }

    public function updated($field) 
    {
        $this->validateOnly($field, [
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);
    }

    public function updateSlider ()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $slider = HomeSlider::find($this->slider_id);
        $slider->title = $this->title;
        $slider->sub_title = $this->sub_title;
        $slider->link = $this->link;
        $slider->status = $this->status;
        if($this->new_image) 
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->new_image->extension();
            $this->new_image->storeAs('sliders',$imageName);
            $slider->image = $imageName;
        }
        $slider->save();
        session()->flash('message','Slider has been updated successfully');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-slider-component')->layout('layouts.admin');
    }
}
