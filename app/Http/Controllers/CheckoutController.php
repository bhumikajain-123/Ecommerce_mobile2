<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return view('checkout');
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

    $cart = session('cart', []);
    $grandTotal = 0;

    foreach ($cart as $item) {
        $grandTotal += $item['price'] * $item['qty'];
    }

    // COD
    if ($request->payment === 'COD') {
        session()->forget('cart');
        return redirect('/')->with('success', 'Order placed successfully (COD)!');
    }

    // Razorpay minimum amount check
    if ($grandTotal < 1) {
        return redirect()->back()->with('error', 'Minimum amount for online payment is ₹1.');
    }

    // Razorpay Online Payment
    $api = new \Razorpay\Api\Api(env('RAZORPAY_KEY_ID'), env('RAZORPAY_KEY_SECRET'));

    $order = $api->order->create([
        'receipt'  => 'order_' . rand(1000, 9999),
        'amount'   => $grandTotal * 100,  // Razorpay converts to paise
        'currency' => 'INR'
    ]);

    return view('razorpay', [
        'orderId' => $order['id'],
        'amount' => $grandTotal,
        'key' => env('RAZORPAY_KEY_ID')
    ]);
}

    public function paymentSuccess(Request $request)
    {
        // Clear cart after payment
        session()->forget('cart');

        return view('payment_success');
    }
}
