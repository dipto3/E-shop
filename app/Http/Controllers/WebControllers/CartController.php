<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Product::find($id);
            // $productid = Product::id();
            // dd($product);
            $size = $request->size;
            $color = $request->color;
            $user_id = $user->id;
            // dd($productid);

            // $product_sizecolor_exist = Cart::where('size', '=', $size)->where('color', '=', $color)->where('user_id', '=', $user_id)->get('id')->first();
            //    dd( $product_sizecolor_exist );
            $product_sizecolor_exist = Cart::where('size', '=', $size)->where('color', '=', $color)->where('product_id', '=', $id)->where('user_id', '=', $user_id)->get('id')->first();
            if ($product_sizecolor_exist) {

                $cart = Cart::find($product_sizecolor_exist)->first();
                $quantity = $cart->quantity;
                $cart->quantity = $quantity + $request->quantity;
                if ($product->discount_price) {
                    $cart->total_price = $product->discount_price * $cart->quantity;
                } else {
                    $cart->total_price = $product->price * $cart->quantity;
                }
                // $cart->total_price = $cart->price * $cart->quantity;
                $cart->save();

                //                alert::success('Product in cart');
                //                Toastr::success('Product in cart ', '', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            } else {
                $cart = new Cart;
                $cart->user_name = $user->name;
                $cart->user_id = $user->id;
                $cart->user_phone = $user->phone;
                $cart->user_email = $user->email;
                $cart->user_address = $user->address;
                $cart->quantity = $request->quantity;
                $cart->size = $request->size;
                $cart->color = $request->color;
                $cart->product_name = $product->name;
                $cart->product_id = $product->id;
                $cart->base_price = $product->price;
                if ($product->discount_price) {
                    $cart->discount_price = $product->discount_price;
                } else {
                    $cart->discount_price = '0';
                }

                // if ($cart->price = $product->discount_price) {
                //     $cart->price = $product->discount_price;
                // } else {
                //     $cart->price = $product->price;
                // }
                // if ($cart->price = $product->discount_price) {
                //     $cart->total_price = $product->discount_price * $cart->quantity;
                // } else {
                //     $cart->total_price = $product->price * $cart->quantity;
                // }
                if ($product->discount_price) {
                    $cart->price = $product->discount_price;
                } else {
                    $cart->price = $product->price;
                }
                if ($product->discount_price) {
                    $cart->total_price = $product->discount_price * $cart->quantity;
                } else {
                    $cart->total_price = $product->price * $cart->quantity;
                }
                // $cart->total_price = $product->price * $request->quantity;
                $cart->image = $product->image;

                $cart->save();

                //                Alert::success('Product in cart','Success');
                //                Toastr::success('Product in cart', 'Success!', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
            }
        } else {

            return redirect('login');

        }
    }
    // public function add_cart(Request $request, $id){
    //     $product = Product::find($id);
    //     if(!$product) {
    //         abort(404);
    //     }
    //     $cart = session()->get('cart');
    //     // if cart is empty then this the first product
    //     if(!$cart) {
    //         $cart = [
    //                 $id => [
    //                     "name" => $product->name,
    //                     "quantity" => 1,
    //                     "price" => $product->price,
    //                     "photo" => $product->photo
    //                 ]
    //         ];
    //         session()->put('cart', $cart);
    //         return redirect()->back()->with('success', 'Product added to cart successfully!');
    //     }
    //     // if cart not empty then check if this product exist then increment quantity
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //         session()->put('cart', $cart);
    //         return redirect()->back()->with('success', 'Product added to cart successfully!');
    //     }
    //     // if item not exist in cart then add to cart with quantity = 1
    //     $cart[$id] = [
    //         "name" => $product->name,
    //         "quantity" => 1,
    //         "price" => $product->price,
    //         "photo" => $product->photo
    //     ];
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product added to cart successfully!');
    // }

    public function delete_cart($id)
    {
        $cart_delete = Cart::find($id);
        $cart_delete->delete();
        Alert::warning('Cart Deleted');

        return redirect()->back();

    }

    public function view_cart()
    {

        $categories = Category::all();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id)->get();
        }
        $settings = DB::table('settings')->get();
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }

        return view('user.pages.view_cart', compact('categories', 'setting', 'carts'));
    }

    public function carts()
    {

        $categories = Category::all();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $users_id = Auth::user();
            $carts = Cart::where('user_id', $users_id)->get();
        }
        $settings = DB::table('settings')->get();
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }

        return view('user.pages.cart_side', compact('categories', 'setting', 'carts'));
    }
}
