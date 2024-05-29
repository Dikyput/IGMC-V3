<?php

namespace App\Http\Controllers;

use App\Models\crew;
use App\Models\itemCloth;
use App\Models\listsaldo;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function penjualan()
    {
        $title = 'Data Penjualan';
        $listsaldo = listsaldo::all();
        $listcloth = itemCloth::all();
        return view('admin.penjualan.index', [
            'listsaldo' => $listsaldo,
            'listcloth' => $listcloth,
            'title' => $title,
        ]);
    }
    public function adminlogin()
    {
        return view('admin.form');
    }

    public function dashboardadmin()
    {
        if (Auth::guard('admin')) {
            $player = User::get();
            $crew = crew::get();

            $title = 'Dashboard';
            return view('admin.dashboard', ['player' => $player, 'crew' => $crew])->with('title', $title);
        }
    }

    public function tes($id)
    {
        if (Auth::guard('admin')) {
            $player = User::find($id);
            return view('admin.player.edit', ['player' => $player]);
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
