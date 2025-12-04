<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($id)
    {
        $id = (int)$id; // ensure integer

        // Fetch products from config
        $products = config('products');

        // Check if product exists
        if (!isset($products[$id])) {
            abort(404, "Product not found");
        }

        // Get the product and add its ID
        $product = $products[$id];
        $product['id'] = $id; // now $product['id'] is available

        // Pass to view
        return view('product', compact('product'));
    }
}
