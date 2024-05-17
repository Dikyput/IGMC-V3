<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserDiscord;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use \GuzzleHttp;

class ShopController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (Auth::check()) {
            $datashop = shop::orderBy('id')->distinct()->get();
            return view('dashboard.shop', compact('datashop'));
        }
    }
    
    public function storecart(Request $request, $id)
    {
        if (Auth::check()) {
        $product = Shop::find($id);
            if (!$product) {
                abort(404);
            }
            $cart = session()->get('cart');
            if (!$cart) {
                $cart = [
                    $id => [
                        "code_item" => $product->code_item,
                        "name_item" => $product->name_item,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }

            if (isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }

            $cart[$id] = [
                    "code_item" => $product->code_item,
                    "name_item" => $product->name_item,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->photo
            ];

            session()->put('cart', $cart);
            if (request()->wantsJson()) {
                return response()->json(['message' => 'Product added to cart successfully!']);
            }
            return redirect()->back()->with('success', 'Product added to cart successfully!');
    
        }
    }
}
