<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
  public function signup(){
    return view("vendor\signup");
  }

  public function register(Request $req){
    $req->validate([
      "full_name" => "required",
      "phone" => "required|regres:/^[6-9][0-9]{9}/|unique:vendors,phone",
      "email" => "required|email|unique:vendors,email",
      "password" => "required",
      "address" => "required"



    ]);
   
  }
}
