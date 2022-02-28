<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

use App\Models\Category;

class AdminEditCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $status;
    public $category_id;
    public $category_slug;

    public function mount($category_slug) 
    {
        $this->category_slug = $category_slug;
        $category = Category::where('slug', $category_slug)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->status = $category->status;
    }

    public function generateslug() 
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($field) 
    {
        $this->validateOnly($field, [
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        $category = Category::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->status = $this->status;
        $category->save();
        session()->flash('message','Category has been updated successfully');
    }   
    public function render()
    {
        return view('livewire.admin.admin-edit-category-component')->layout('layouts.admin');
    }
}
