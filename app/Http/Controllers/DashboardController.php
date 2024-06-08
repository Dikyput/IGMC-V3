<?php

namespace App\Http\Controllers;

use App\Models\crew;
use App\Models\JadwalTournamen;
use App\Models\PlayerIgmc2024;
use App\Models\UiPage;
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
        return redirect()->route("show");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $hh = UiPage::where('type', 4)->get();
        $hh2 = UiPage::where('type', 4)->get();
        $hh3 = UiPage::where('type', 4)->get();
        $hh4 = UiPage::where('type', 4)->get();
        $hh5 = UiPage::where('type', 4)->get();
        $hh6 = UiPage::where('type', 4)->get();
        $h1 = UiPage::where('type', 3)->get();
        $h2 = UiPage::where('type', 1)->get();
        $h3 = UiPage::where('type', 2)->get();
        $datacrew = crew::orderBy('id')->distinct()->get();
        $playerigmc = PlayerIgmc2024::orderBy('id')->distinct()->get();
        $jadwal = JadwalTournamen::orderBy('id')->distinct()->get();
        return view('landingpage.dashboard', ['datacrew' => $datacrew, 'playerigmc' => $playerigmc, 'jadwal' => $jadwal, 'h1' => $h1, 'h2' => $h2, 'h3' => $h3, 'hh' => $hh, 'hh2' => $hh2, 'hh3' => $hh3, 'hh4' => $hh4, 'hh5' => $hh5, 'hh6' => $hh6]);
    }
    public function about()
    {
        return view('landingpage.about');
    }
    public function tournament()
    {
        return view('landingpage.tournament');
    }
    public function tournamentdetails()
    {
        return view('landingpage.tournamentdetails');
    }
}
