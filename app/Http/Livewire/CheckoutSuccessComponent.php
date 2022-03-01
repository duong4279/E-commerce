<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutSuccessComponent extends Component
{
    public function render()
    {
        return view('livewire.checkout-success-component')->layout('layouts.base');
    }
}
