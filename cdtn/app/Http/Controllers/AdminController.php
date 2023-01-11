<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;
class AdminController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.Home');
    }

    public function users(){
        $users =  DB::table('users')->where('level',0)->get();
        return view('admin.CutomerList',['users'=> $users]);

    }
    public function products(){
        $products =  DB::table('products')->paginate(15);
       return view('admin.ProductList',['products'=> $products]);
    }

    //lấy ra danh sách các sản phẩm theo loại sản phẩm
    public function get_products_id($id){
        $products =  DB::table('products')->where('category_id',$id)->orderBy('created_at','desc')->simplePaginate(15);
        return view('admin.ProductList',['products'=> $products]);
    }
    public function insert(){
        $attributes = request()-> validate([
            'product_name' => 'required | min:3 | max: 100',
            'category_id' => 'required',
            'price' => 'required',
            'screen'=> 'required',
            'pin' => 'required',
            'screen_resolution'=> 'required',
            'weight'=>'required',
            'chip'=>'required',
            'discount'=>'',
            'image' => 'required|image|mimes:jpg,png,jpg|max:2048',
        ]);
        if(request()->hasFile('image')) {
            $image = request()->file('image');
            //you also need to keep file extension as well
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path().'/assets/products', $new_name);
            $attributes['image']= $new_name;
         }
        Product::create($attributes);
        return response()->json(['succes'=>$attributes]);
    }

    public function registerUser(Request $request){
        $attributes = $request-> validate([
            'username' => 'required | min:3 | max: 100',
            'email' => 'required|unique:users,email',
            'phone_number' => 'required | unique:users,phone_number',
            'address'=> 'required',
            'password' => 'required | min: 6 | max: 255',
            'avatar' => 'image|mimes:jpg,png,jpg|max:2048',
            'gender' => '',
        ]);
        if($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            //you also need to keep file extension as well
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path().'/assets/images/users', $new_name);
            $attributes['avatar']= $new_name;
         }
         else{
            $attributes['avatar']= '';
         }

            $user  = User::create($attributes);
    }

    public function delete($id){
        Product::find($id)->delete();
        return response()->json(['data'=> 'removed']);
    }

    public function update($id,Request $request){
        $attributes = request()-> validate([
            'product_name' => 'required | min:3 | max: 100',
            'category_id' => 'required',
            'price' => 'required',
            'screen'=> 'required',
            'pin' => 'required',
            'screen_resolution'=> 'required',
            'weight'=>'required',
            'chip'=>'required',
            'discount'=>'',
            'image' => 'image|mimes:jpg,png,jpg|max:2048',
        ]);
        if(request()->hasFile('image')) {
            $image = request()->file('image');
            //you also need to keep file extension as well
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path().'/assets/products', $new_name);
            $attributes['image']= $new_name;
         }
        $product = Product::find($id)->update($attributes);
         return response()->json(['succes'=>'updated']);
    }

    //lấy ra thông tin chi tiết 1 sản phẩm
    public function get_product_id($id){
        $product = Product::find($id);
        return response()->json(['product'=>$product]);
    }

    public function categorys(){
        return view('admin.CategoryList');
    }

    public function searchproducts(){
        return view('admin.CategoryList');
    }

    public function searchCustomer(Request $request){

        $searchcustomer = DB::table('users')->where('username', 'like', '%' . $request->key . '%')->get();


        return view('admin.SearchCustomer', compact('searchcustomer'));
    }
}
