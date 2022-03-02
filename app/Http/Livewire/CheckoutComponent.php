<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;


class CheckoutComponent extends Component
{
    public $other_address;

    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $address;
    public $note;

    public $s_firstname;
    public $s_lastname;
    public $s_email;
    public $s_phone;
    public $s_address;
    public $s_note;

    public $paymentmode;
    public $success;

    public function updated($field)
    {
        $this->validateOnly($field,[
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'paymentmode' => 'required'

        ]);
    }

    public function placeOrder()
    {
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'paymentmode' => 'required'
        ]);

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->subtotal = session()->get('checkout')['subtotal'];
        $order->total = session()->get('checkout')['total'];
        $order->firstname = $this->firstname;
        $order->lastname = $this->lastname;
        $order->email = $this->email;
        $order->phone = $this->phone;
        $order->address = $this->address;
        $order->note = $this->note;
        $order->status = 'ordered';
        $order->save();

        foreach (Cart::content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }

        $shipping = new Shipping();
        $shipping->order_id = $order->id;
        $shipping->firstname = $this->firstname;
        $shipping->lastname = $this->lastname;
        $shipping->email = $this->email;
        $shipping->phone = $this->phone;
        $shipping->address = $this->address;
        $shipping->note = $this->note;
        $shipping->save();

        if($this->paymentmode == 'cod')
        {
            $transaction = new Transaction();
            $transaction->order_id = $order->id;
            $transaction->user_id = Auth::user()->id;
            $transaction->mode = 'cod';
            $transaction->status = 'pending';
            $transaction->save();
        }
        else if($this->paymentmode == 'card')
        {
            $transaction = new Transaction();
            $transaction->order_id = $order->id;
            $transaction->user_id = Auth::user()->id;
            $transaction->mode = 'card';
            $transaction->status = 'pending';
            $transaction->save();
        }

        $this->success=1;
        Cart::destroy();
        session()->forget('checkout');
    }

    public function verifyCheckout()
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        else if($this->success)
        {
            return redirect()->route('checkout.success');
        }
        else if(!session()->get('checkout'))
        {
            return redirect()->route('product.cart');
            // echo "<script type='text/javascript'>alert('checkout');</script>";
        }
    }

    public function render()
    {
        $this->verifyCheckout();
        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
