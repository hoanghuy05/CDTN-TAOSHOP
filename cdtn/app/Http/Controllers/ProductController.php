<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function get_by_id($id){
        $product = Product::find($id);
        return view('users.Product_Detail',['product'=> $product]);
    }
}
