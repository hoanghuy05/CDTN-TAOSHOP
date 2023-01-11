<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shopping_Cart;
use Illuminate\Support\Facades\DB;
use App\Models\Cart_Detail;
class OrderController extends Controller
{
     function __construct()
    {
        $this->middleware('auth');
    }


    public function shopping_cart(){
        $shopping_cart = DB::Table('cart__details')->join('shopping__carts','cart__details.shopping_cart_id','=','shopping__carts.id')->join('users','shopping__carts.user_id','=','users.id')
        ->join('products','cart__details.product_id','=','products.id')->select(DB::raw('cart__details.total_quantity,products.image,products.price,products.product_name,products.id,cart__details.shopping_cart_id'))->get();
        $total_price = DB::Table('cart__details')->select(DB::raw('sum(cart__details.total_price) as total_price'))
        ->where('cart__details.shopping_cart_id',$shopping_cart[0]->shopping_cart_id)->get();
        if($shopping_cart){
            return view('users.Order',['shopping_carts'=> $shopping_cart,'total_price'=>$total_price]);
        }
        else return;
        return view('users.Order');
    }
    //khi click vào chi tiết sản phẩm
    public function insert($product_id){

            $product = Product::find($product_id);
        $shopping_cart = Shopping_Cart::where('user_id',auth()->user()->id)->first();
          //nếu chưa tồn tại thì insert mới
        if(!$shopping_cart){
            $shopping_cart_attribute = [
                'user_id' =>auth()->user()->id,
            ];
            Shopping_Cart::create($shopping_cart_attribute);
        }
        //nếu tồn tại thì thêm vào bảng chi tiết giỏ hàng
        else{
            $cart_detail = Cart_Detail::where('product_id',$product_id)->first();
            //nếu đã tồn tại sản phẩm trong giỏ hàng thì cập nhật giá tiền + số lượng
            $Cart_Detail_attribute = [
                'shopping_cart_id' => $shopping_cart->id,
                'product_id' => $product_id,
                'total_quantity' => 1,
                'total_price' => $product->price
            ];
            //kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
            if(!$cart_detail){
                Cart_Detail::create($Cart_Detail_attribute);
            }
            else{
                Cart_Detail::find($cart_detail->id)->update($Cart_Detail_attribute);
            }
        }

        //tổng tiền
        $total_price = DB::Table('cart__details')->select(DB::raw('sum(cart__details.total_price) as total_price'))
        ->where('cart__details.shopping_cart_id',$shopping_cart->id)->get();

        $cart_details = DB::Table('cart__details')->get();
        $products = DB::Table('cart__details')->join('products', 'products.id','=', 'cart__details.product_id')
        ->join('shopping__carts','cart__details.shopping_cart_id','=', 'shopping__carts.id')
        ->where('cart__details.shopping_cart_id',$shopping_cart->id)->get();
        return view('users.Order',['cart_detail'=>$cart_details,'products'=> $products,'total_price'=>$total_price]);
    }
    public function updateOrder($product_id){
        $product = Product::find($product_id);
        $price = request()->total_quantity * $product->price;
        $attribute = [
            'total_price' => $price,
            'total_quantity'=> request()->total_quantity,
        ];
        $shopping_cart = Shopping_Cart::where('user_id',auth()->user()->id)->first();
        $total_price = DB::Table('cart__details')->select(DB::raw('sum(cart__details.total_price) as total_price'))
        ->where('cart__details.shopping_cart_id',$shopping_cart->id)->get();
         Cart_Detail::where('product_id',$product_id)->update($attribute);
        return response()->json(['total_price'=>$total_price]);
    }
    public function addOrder(){

        return view('users.Order',['product'=> $product]);
    }
}
