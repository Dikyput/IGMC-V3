<?php

namespace App\Http\Controllers;

use App\Models\Saldo;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Player';
        $player = User::all();
        return view('admin.player.index', [
            'player' => $player,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Data Player';
        $player = User::find($id);
        return view('admin.player.edit', [
            'player' => $player,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Data Player';
        $player = User::find($id);
        return view('admin.player.edit', ['player' => $player, 'title' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';
        $title = 'Data Player';
        $player = User::find($id);
        $idsaldo = $player->useriddiscord->id_discord;
        $saldo = Saldo::where('id_discord', $idsaldo)->first();

        $oldData = [
            'username' => $player->username,
            'email' => $player->email,
            'nationaly' => $player->nationaly,
        ];

        $oldSaldo = [
            'nominal' => $saldo->nominal,
        ];

        $newData = [
            'username' => $request->username,
            'email' => $request->email,
            'nationaly' => $request->nationaly,
        ];

        $newSaldo = [
            'nominal' => $request->saldo,
        ];

        $saldo->update($newSaldo);
        $player->update($newData);

        $changes = [
            'Username' => [
                'old' => $oldData['username'],
                'new' => $newData['username'],
            ],
            'Email' => [
                'old' => $oldData['email'],
                'new' => $newData['email'],
            ],
            'National' => [
                'old' => $oldData['nationaly'],
                'new' => $newData['nationaly'],
            ],
            'Saldo' => [
                'old' => $oldSaldo['nominal'],
                'new' => $newSaldo['nominal'],
            ],
        ];

        $fields = [];
        foreach ($changes as $field => $change) {
            $fieldValue = "Data Sebelum: {$change['old']} \nSetelah: {$change['new']}";
            $fields[] = [
                'name' => $field,
                'value' => $fieldValue,
                'inline' => true,
            ];
        }

        $message = [
            'embeds' => [
                [
                    'title' => $title,
                    'description' => $userName . ' Telah merubah Data Player.',
                    'fields' => $fields,
                    'color' => 14177041,
                ],
            ],
        ];

        $client = new Client();
        $response = $client->post($webhookUrl, [
            'json' => $message,
        ]);

        return redirect('/admin/data-player')->with('toast_success', 'Data Player Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = User::find($id);
        $player->delete();
        return redirect('/admin/data-player')->with('toast_success', 'Data Player Berhasil di Delete');
    }
}
