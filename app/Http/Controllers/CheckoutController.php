<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('front-end.checkout.checkout',[
            'products'=>Cart::content()
        ]);
    }
}
