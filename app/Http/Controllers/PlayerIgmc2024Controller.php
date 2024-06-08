<?php

namespace App\Http\Controllers;

use App\Models\PlayerIgmc2024;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PlayerIgmc2024Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Player IGMC';
        $playerigmc = PlayerIgmc2024::all();
        return view('admin.playerigmc.index', [
            'playerigmc' => $playerigmc,
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
        $title = 'Data Player IGMC';
        return view('admin.playerigmc.tambah', [
            'title' => $title,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';
        $this->validate($request, [
            'name' => 'required',
            'name_team' => 'required',
        ]);

        $filegambar = null;
        $filegambar2 = null;

        if ($request->hasFile('logo_team')) {
            $tujuan_upload = 'assets/playerigmc/';
            $file = $request->file('logo_team');
            $filegambar2 = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar2);
        }
        if ($request->hasFile('foto')) {
            $tujuan_upload = 'assets/playerigmc/';
            $file = $request->file('foto');
            $filegambar = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar);
        }

        PlayerIgmc2024::create([
            'name' => $request->name,
            'name_team' => $request->name_team,
            'logo_team' => $filegambar2,
            'foto' => $filegambar,
        ]);
        sleep(2);
        $embed = [
            'title' => 'Data Player IGMC',
            'description' => $userName . ' Telah Menambah Data Player IGMC.',
            'color' => 16777215,
            'fields' => [
                [
                    'name' => 'Name',
                    'value' => $request->name,
                    'inline' => true,
                ],
                [
                    'name' => 'Name Team',
                    'value' => $request->name_team ?? 'N/A',
                    'inline' => true,
                ],
            ],
            'thumbnail' => [
                'url' => 'https://igmcv3.com/assets/playerigmc/' . $filegambar,
            ],
            'footer' => [
                'text' => 'Diperbarui pada ' . now()->toDateTimeString(),
            ],
        ];

        $client = new Client();
        $response = $client->post($webhookUrl, [
            'json' => [
                'embeds' => [$embed],
            ],
        ]);
        return redirect('/admin/data-playerigmc')->with('toast_success', 'Data Crew Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Data Player IGMC';
        $playerigmc = PlayerIgmc2024::find($id);
        return view('admin.playerigmc.edit', [
            'playerigmc' => $playerigmc,
            'title' => $title,
        ]);
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
        $playerigmc = PlayerIgmc2024::find($id);
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';
        if (!$playerigmc) {
            return redirect('/admin/data-playerigmc')->with('toast_error', 'Data Player tidak ditemukan');
        }

        $oldData = $playerigmc->toArray();
        $data = [
            'name' => $request->name,
            'roles' => $request->roles,
        ];

        if ($request->hasFile('logo_team')) {
            $tujuan_upload = 'assets/playerigmc/';
            $file = $request->file('logo_team');
            $filegambar2 = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar2);
            $data['logo_team'] = $filegambar2;
        }

        if ($request->hasFile('foto')) {
            $tujuan_upload = 'assets/playerigmc/';
            $file = $request->file('foto');
            $filegambar = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar);
            $data['foto'] = $filegambar;
        }

        $playerigmc->update($data);

        $newData = $playerigmc->toArray();
        $changes = [];
        foreach ($newData as $key => $value) {
            if ($oldData[$key] != $value) {
                $changes[$key]['old'] = $oldData[$key];
                $changes[$key]['new'] = $value;
            }
        }

        $embed = [
            'title' => 'Perubahan Data Player IGMC',
            'description' => $userName . ' telah mengubah data Player.',
            'color' => 16777215,
            'fields' => [],
            'footer' => [
                'text' => 'Diperbarui pada ' . now()->toDateTimeString(),
            ],
        ];

        foreach ($changes as $key => $change) {
            $fieldValue = "Data Sebelum: {$change['old']} \nSetelah: {$change['new']}";
            if ($key == 'foto' || $key == 'logo_team') {
                $embed['thumbnail'] = [
                    'url' => asset('assets/playerigmc/' . $change['new']),
                ];
            }
            $embed['fields'][] = [
                'name' => ucwords(str_replace('_', ' ', $key)),
                'value' => $fieldValue,
                'inline' => true,
            ];
        }

        $client = new Client();
        $response = $client->post($webhookUrl, [
            'json' => [
                'embeds' => [$embed],
            ],
        ]);

        return redirect('/admin/data-playerigmc')->with('toast_success', 'Data Player Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $playerigmc = PlayerIgmc2024::find($id);
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $namaPlayer = $playerigmc->name;
        $namaTeam = $playerigmc->name_team;

        if (!$playerigmc) {
            return redirect('/admin/data-playerigmc')->with('toast_error', 'Data Player tidak ditemukan');
        }

        $oldData = $playerigmc->toArray();

        if ($playerigmc->logo_team) {
            $tujuan_upload2 = 'assets/playerigmc';
            $folderDir2 = $tujuan_upload2 . '/' . $playerigmc->logo_team;
            if (File::exists($folderDir2)) {
                File::delete($folderDir2);
            }
        }

        if ($playerigmc->foto) {
            $tujuan_upload = 'assets/playerigmc';
            $folderDir1 = $tujuan_upload . '/' . $playerigmc->foto;
            if (File::exists($folderDir1)) {
                File::delete($folderDir1);
            }
        }

        $playerigmc->delete();

        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';
        $embed = [
            'title' => 'Penghapusan Data Player IGMC',
            'description' => $userName . ' Telah menghapus data Player.',
            'color' => 16711680,
            'fields' => [
                [
                    'name' => 'Name',
                    'value' => $namaPlayer,
                    'inline' => true,
                ],
                [
                    'name' => 'Name Team',
                    'value' => $namaTeam ?? 'N/A',
                    'inline' => true,
                ],
            ],
            'footer' => [
                'text' => 'Dihapus pada ' . now()->toDateTimeString(),
            ],
        ];

        $client = new Client();
        $response = $client->post($webhookUrl, [
            'json' => [
                'embeds' => [$embed],
            ],
        ]);

        return redirect('/admin/data-playerigmc')->with('toast_success', 'Data Player Berhasil dihapus');
    }
}
