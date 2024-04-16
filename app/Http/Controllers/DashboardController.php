<?php

namespace App\Http\Controllers;

use App\Models\crew;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $datacrew = crew::orderBy('id')->distinct()->get();
        return view('landingpage.dashboard', ['datacrew' => $datacrew]);
    }
}
