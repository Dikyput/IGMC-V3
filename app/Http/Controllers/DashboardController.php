<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            return redirect()->route("dashboard");
        };
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route("landingpage");
    }

}
