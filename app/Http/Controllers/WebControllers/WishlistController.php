<?php

namespace App\Http\Controllers\WebControllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Wishlist;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class WishlistController extends Controller
{
    public function add_wishlist($id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Product::find($id);

            $product_exist = Wishlist::where('product_id', $product)->get('id')->first();
            if ($product_exist) {
                //             Toastr::success('Product in cart', 'Success!', ["positionClass" => "toast-top-right"]);
            } else {
                $wishlist = new Wishlist;
                $wishlist->user_id = $user->id;
                $wishlist->product_id = $product->id;

                $wishlist->save();

                return redirect()->back();
            }

        } else {
            return redirect('login');
        }
    }

    public function all_wishlist()
    {

        $categories = Category::all();
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
        } else {
            $carts = [];
        }
        $settings = DB::table('settings')->get();
        $setting = [];
        foreach ($settings as $key => $value) {
            $setting[$value->name] = $value->value;
        }
        $loggedinUser = Auth::user()->id;
        // dd($loggedinUser);
        $wishlistData = Wishlist::where('user_id', $loggedinUser)->with(['product', 'user'])->get();

        $wishlists = Wishlist::where('user_id', $loggedinUser)->count();
        // dd($wishlistData);

        return view('user.pages.wishlist', compact('categories', 'setting', 'carts', 'wishlistData', 'wishlists'));
    }

    public function destroy($id)
    {
        $wishlist_delete = Wishlist::find($id);
        $wishlist_delete->delete();
        Alert::warning('Wishlist Deleted');

        return redirect()->back();

    }
}
