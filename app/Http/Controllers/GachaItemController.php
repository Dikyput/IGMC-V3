<?php

namespace App\Http\Controllers;

use App\Models\Igmcoutfit;
use App\Models\ItemCloth;
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
        $data = $request->validate([
            'id' => 'required|integer',
        ]);

        $getdata = ItemCloth::where('id', $data['id'])->first();
        if (!$getdata) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        $texture = $getdata->texture;
        $img = $getdata->img;
        $tipe = $getdata->tipe;
        $drawable = $getdata->drawable;

        $newData = [
            'texture' => $texture,
            'img' => $img,
            'tipe' => $tipe,
            'drawable' => $drawable,
        ];

        $dataBaju = Igmcoutfit::firstOrCreate(['id_discord' => $discordid]);
        $adaData = json_decode($dataBaju->data, true);
        $adaData[] = $newData;
        $dataBaju->update(['data' => json_encode($adaData, JSON_UNESCAPED_SLASHES)]);

        return response()->json(['success' => 'Item collected successfully']);
    }

    public function gachaitem()
    {
        if (Auth::check()) {
            $items = ItemCloth::all();
            return view('dashboard.cart.gacha', compact('items'));
        }
    }
}
