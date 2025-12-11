<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Razorpay\Api\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
  public function index()
{
    $cart = session('cart', []);

    if (empty($cart)) {
        return view('checkout'); // will show empty vending message
    }

    $grandTotal = 0;
    foreach ($cart as $item) {
        $grandTotal += $item['price'] * $item['qty'];
    }

    return view('checkout', compact('cart', 'grandTotal'));
}

public function placeOrder(Request $request)
{
    $request->validate([
        'payment' => 'required'
    ]);

    // Clear the cart like vending machine dispensed the items
    session()->forget('cart');

    return redirect('/')->with('success', 'Order dispensed successfully!');
}

}
