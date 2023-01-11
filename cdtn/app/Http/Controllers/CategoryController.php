<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function getPhone(){
        $products =  DB::table('products')->where('category_id', 1)->paginate(15);
        return view('users.PhonePage',['products'=> $products]);
    }
    public function getIpad(){
        $products =  DB::table('products')->where('category_id', 2)->paginate(15);
        return view('users.PhonePage',['products'=> $products]);
    }
    public function getAirpods(){
        $products =  DB::table('products')->where('category_id', 3)->paginate(15);
        return view('users.PhonePage',['products'=> $products]);
    }
    public function getAccessories(){

        $products =  DB::table('products')->where('category_id', 4)->paginate(15);
        return view('users.PhonePage',['products'=> $products]);
    }
    public function searchProduct(Request $request){

        $searchproduct = DB::table('products')->where('product_name', 'like', '%' . $request->key . '%')->get();


        return view('admin.SearchProduct', compact('searchproduct'));
   }



}
