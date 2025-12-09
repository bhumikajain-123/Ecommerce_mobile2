<?php


namespace App\Http\Controllers\vendor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vendor\v_product;

use App\Models\Vendor;

class ProductController extends Controller
{
    public function add_product(){
        return view('vendor/add_product');

    }

      public function store_product(Request $req){
        $req->validate([
           "vp_name" => "required",
        "vp_price" => "required|numeric",
        "vp_stock" => "required|integer",
        "vp_description" => "required",
        "vp_category" => "required",
        "vp_image" => "required|image",
        ],[
    'vp_name.required' => 'Product name is required',
    'vp_price.required' => 'Product price is required',
    'vp_stock.required' => 'Stock quantity is required',
    'vp_category.required' => 'Please select category',
    'vp_description.required' => 'Please write product description',
        ]);

         $filename = null;
    if($req->hasFile('vp_image')){
        $file = $req->file('vp_image');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
    }

    
    // Get vendor ID from session
    $vendorId = session('vendorId');
    if(!$vendorId){
        return redirect('vendor/login')->with('error','Please login to add product.');
    }

         v_product::create([
        'v_id'          => $vendorId, // use logged-in vendor ID
        'p_name'        => $req->vp_name,
        'p_price'       => $req->vp_price,
        'p_image'       => $filename,
        'p_stock'       => $req->vp_stock,
        'p_description' => $req->vp_description,
        'c_id'          => $req->vp_category,
    ]);
          return redirect()->back()->with('success','Product Added Successfully');
    }



     // View all products
    public function view_product(){
        // Fetch all products from database
        $products = v_product::all();  

        // Pass to the blade
        return view('vendor.view_product', compact('products')); 
}

// Show edit form
public function edit_product($id){

    $product = v_product::where('p_id', $id)->firstOrFail();

    return view('vendor.edit_product', compact('product'));
}

public function update_product(Request $req, $id){

    $req->validate([
        "vp_name"        => "required",
        "vp_price"       => "required|numeric",
        "vp_stock"       => "required|integer",
        "vp_description" => "required",
        "vp_category"    => "required",
    ]);

    $product = v_product::where('p_id', $id)->firstOrFail();

    $product->update([
        'p_name'        => $req->vp_name,
        'p_price'       => $req->vp_price,
        'p_stock'       => $req->vp_stock,
        'p_description' => $req->vp_description,
        'c_id'          => $req->vp_category,
    ]);

    return redirect()->route('vendor.view_product')
                     ->with('success','Product updated successfully!');
}

// delete

public function delete_product($id)
{
    $product = v_product::findOrFail($id);

    // Delete the image if exists
    if($product->p_image && file_exists(public_path('uploads/vendor/'.$product->p_image))){
        unlink(public_path('uploads/vendor/'.$product->p_image));
    }

    // Delete product from database
    $product->delete();

    return redirect()->back()->with('success', 'Product Deleted Successfully!');
}





}