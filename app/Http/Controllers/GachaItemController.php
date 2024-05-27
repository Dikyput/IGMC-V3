<?php

namespace App\Http\Controllers;

use App\Models\Igmcoutfit;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class GachaItemController extends Controller
{
    public function cobaitem()
    {
        return view('dashboard.add_data_texture');
    }
    public function store(Request $request)
    {
        $userData = Auth::user();
        $discordid = $userData->id_discord;
        $request->validate([
            'texture' => 'required|integer',
            'img' => 'required|string',
            'tipe' => 'required|string',
            'drawable' => 'required|integer',
        ]);

        $newData = [
            'texture' => $request->texture,
            'img' => $request->img,
            'tipe' => $request->tipe,
            'drawable' => $request->drawable,
        ];

        $dataBaju = Igmcoutfit::firstOrCreate(['id_discord' => $discordid]);
        $adaData = json_decode($dataBaju->data, true);
        $adaData[] = $newData;
        $dataBaju->update(['data' => json_encode($adaData, JSON_UNESCAPED_SLASHES)]);
    }
}
