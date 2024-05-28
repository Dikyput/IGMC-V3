<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminlogin()
    {
        return view('admin.form');
    }

    public function dashboardadmin()
    {
        if (Auth::guard('admin')) {
            $title = 'Admin';
            return view('admin.layouts.dashboard')->with('title', $title);
        }
    }

    public function loginform(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }
        return redirect()->intended('/admin/login');
    }

    public function keluaradmin()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
