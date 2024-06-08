<?php

namespace App\Http\Controllers;

use App\Models\crew;
use App\Models\ItemCloth;
use App\Models\listsaldo;
use App\Models\User;
use Auth;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function penjualan()
    {
        $title = 'Data Penjualan';
        $listsaldo = listsaldo::all();
        $listcloth = ItemCloth::all();
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
        $webhookUrl = 'https://discord.com/api/webhooks/1247534764089409567/MePf3mx_5MJHbA1RLEiDrcNxRghaT79uHTqfMm0NV8F1H30fhYRcQb0S-OgE2zUehFZI';
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $user = Auth::guard('admin')->user();
            $userName = $user->name;
            $email = $user->email;
            $ipAddress = $request->ip();
            $embed = [
                'title' => 'Admin Login',
                'description' => "$userName ($email) Sedang OnDuty.",
                'color' => 3066993,
                'fields' => [
                    [
                        'name' => "IP Address $userName",
                        'value' => $ipAddress,
                        'inline' => true,
                    ],
                ],
                'footer' => [
                    'text' => 'Login pada ' . now()->toDateTimeString(),
                ],
            ];

            $client = new Client();
            $response = $client->post($webhookUrl, [
                'json' => [
                    'embeds' => [$embed],
                ],
            ]);
            return redirect()->intended('/admin/dashboard');

        }
        return redirect()->intended('/admin/login');
    }

    public function keluaradmin()
    {
        $webhookUrl = 'https://discord.com/api/webhooks/1247534764089409567/MePf3mx_5MJHbA1RLEiDrcNxRghaT79uHTqfMm0NV8F1H30fhYRcQb0S-OgE2zUehFZI';
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $email = $user->email;
        $embed = [
            'title' => 'Admin Logout',
            'description' => "$userName ($email) Telah OffDuty.",
            'color' => 15158332,
            'footer' => [
                'text' => 'Logout pada ' . now()->toDateTimeString(),
            ],
        ];

        $client = new Client();
        $response = $client->post($webhookUrl, [
            'json' => [
                'embeds' => [$embed],
            ],
        ]);

        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('/admin/login');
    }

    protected function sessionExpired()
    {
        $webhookUrl = 'https://discord.com/api/webhooks/1247534764089409567/MePf3mx_5MJHbA1RLEiDrcNxRghaT79uHTqfMm0NV8F1H30fhYRcQb0S-OgE2zUehFZI';
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $email = $user->email;
        $embed = [
            'title' => 'Session Telah Berakhir',
            'description' => "$userName ($email) Telah OffDuty Dikarekan Session Habis.",
            'color' => 16776960,
            'footer' => [
                'text' => 'Session expired pada ' . now()->toDateTimeString(),
            ],
        ];

        $client = new Client();
        $response = $client->post($webhookUrl, [
            'json' => [
                'embeds' => [$embed],
            ],
        ]);

        Auth::guard('admin')->logout();
        Session::flush();
        return redirect('/admin/login')->withErrors(['error' => 'Session expired.']);
    }
}
