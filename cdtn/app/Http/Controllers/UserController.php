<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index(){
        $products =  DB::table('products')->where('category_id', 1)->paginate(15);
        $ipads = DB::table('products')->where('category_id', 2)->paginate(15);
        $total_product_shopping_cart = DB::table('cart__details')->join('shopping__carts','cart__details.shopping_cart_id','=','shopping__carts.id')->select(DB::raw('count(cart__details.product_id) as total'))->get();
        return view('users.Home',['products'=> $products, 'ipads'=>$ipads,'total_shopping'=>$total_product_shopping_cart]);
    }

    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['error'=>'User is not registered!']);
        }
        if (empty($request->email)||empty($request->password)) {
            return response()->json(['error'=>'Email or Password must not be empty!']);
        }
        if (!\Hash::check($request->password, $user->password)) {
            return response()->json(['error'=>'Ooops! credentials do not match!']);
        }
        $attributes= [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (\Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>1])) {
            return response()->json(['successAdmin'=>'successAdmin']);
        }
        else if(\Auth::attempt(['email'=>$request->email,'password'=>$request->password,'level'=>0])){
            return response()->json(['successUser'=> 'successUser']);
        }

        return response()->json(['error'=>'Ooops! something went wrong!']);

    }
    public function logout(){
       auth()->logout();
       return redirect('/');
    }


    /**upload ảnh***/
    public function upload_image(Request $request){
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
         return response()->json(['succes'=>$attributes['avatar']]);
    }

    /**lấy ra thông tin khi đăng nhập**/
    public function profile(){
        return view('users.Profile');
    }


    public function update($id,Request $request){
        $user = User::find($id);
        $attributes = $request-> validate([
            'username' => 'required | min:3 | max: 100',
            'email' => 'required|unique:users,email,'.$user->id,
            'phone_number' => 'required | unique:users,phone_number,'.$user->id,
            'address'=> 'required',
            'password' => 'required | min: 6 | max: 255',
            'gender' => '',
        ]);
       $user=User::find($id)->update($attributes);
        return response()->json(['succes'=>'updated']);
    }


    public function get_by_id($id){
        $user = User::find($id);
        return response()->json(['user'=>$user]);
    }
    public function delete($id){
        User::find($id)->delete();
        return response()->json(['data'=> 'removed']);
    }
    public function change_password(){
        return view('users.ChangePassword');
    }

    public function register(Request $request){
        //response()->json(['succes'=> $request->avatar]);

        if (request()->password !== request()->ConfirmPassword) {
            return response()->json(['error'=>'Pass word không trùng khớp']);
        }
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
        auth()->login($user);
    }


}
