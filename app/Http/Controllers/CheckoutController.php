<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
public function checkout()
{
    $cart = session()->get('cart', []);

    return view('checkout', compact('cart'));
}


}
