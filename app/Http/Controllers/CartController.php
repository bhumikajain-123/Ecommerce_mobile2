<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add product to cart
    public function add($id)
    {
        // Get existing cart or empty array
        $cart = session()->get('cart', []);

        // If product exists, increase quantity; otherwise set to 1
        if (isset($cart[$id])) {
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }

        // Save cart to session
        session()->put('cart', $cart);

        // Redirect to cart page
        return redirect()->route('cart.show')->with('success', 'Item added to cart');
    }

    // Show cart page
    public function show()
    {
        $cart = session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    public function checkout()
{
    // Get cart from session
    $cart = session()->get('cart', []);

    // Send cart to checkout view
    return view('checkout', compact('cart'));
}

}
