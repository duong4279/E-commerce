<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product-> qty + 1;
        Cart::update($rowId, $qty);
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product-> qty - 1;
        Cart::update($rowId, $qty);
    }
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed');

    }
    public function destroyAll()
    {
        Cart::destroy();
    }


    public function checkout()
    {
        if(Auth::check())
        {
            return redirect()->route('product.checkout');
        }
        else 
        {
            return redirect()->route('login');
        }
    }


    public function setAmountForCheckout()
    {
        if(!Cart::count() > 0) 
        {
            session()->forget('checkout');
            return;
        }
        session()->put('checkout',[
            'subtotal' => Cart::subtotal(),
            'total' => Cart::total()
        ]);
    }
        

    public function render()
    {
         $this->setAmountForCheckout();
        return view('livewire.cart-component')-> layout('layouts.base');
    }
}
