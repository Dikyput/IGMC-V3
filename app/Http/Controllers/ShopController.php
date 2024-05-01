<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

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
            return view('dashboard.shop', ['datashop' => $datashop]);
        }
    }
}
