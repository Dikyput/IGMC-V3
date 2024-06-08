<?php

namespace App\Http\Controllers;

use App\Models\crew;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CrewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Crew';
        $crew = crew::all();
        return view('admin.crew.index', [
            'crew' => $crew,
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
        $title = 'Data Crew';
        return view('admin.crew.tambah', [
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
            'roles' => 'required',
        ]);

        $filegambar = null;

        if ($request->hasFile('foto')) {
            $tujuan_upload = 'assets/crew/';
            $file = $request->file('foto');
            $filegambar = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar);

        }

        crew::create([
            'name' => $request->name,
            'roles' => $request->roles,
            'foto' => $filegambar,
        ]);

        $embed = [
            'title' => 'Data CREW IGMC',
            'description' => $userName . ' Telah Menambah Data CREW IGMC.',
            'color' => 16777215,
            'fields' => [
                [
                    'name' => 'Name',
                    'value' => $request->name,
                    'inline' => true,
                ],
                [
                    'name' => 'Roles',
                    'value' => $request->roles ?? 'N/A',
                    'inline' => true,
                ],
            ],
            'thumbnail' => [
                'url' => 'https://igmcv3.com/assets/crew/' . $filegambar,
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
        return redirect('/admin/data-crew')->with('toast_success', 'Data Crew Berhasil di Tambahkan');
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
        $title = 'Data Crew';
        $crew = crew::find($id);
        return view('admin.crew.edit', [
            'crew' => $crew,
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
        $crew = Crew::find($id);
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';

        if (!$crew) {
            return redirect('/admin/data-crew')->with('toast_error', 'Data Crew tidak ditemukan');
        }

        $oldData = $crew->toArray();
        $data = [
            'name' => $request->name,
            'roles' => $request->roles,
        ];

        if ($request->hasFile('foto')) {
            $tujuan_upload = 'assets/crew';
            $file = $request->file('foto');
            $filegambar = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar);
            $data['foto'] = $filegambar;
        }

        $crew->update($data);
        $newData = $crew->toArray();
        $changes = [];
        foreach ($newData as $key => $value) {
            if ($oldData[$key] != $value) {
                $changes[$key]['old'] = $oldData[$key];
                $changes[$key]['new'] = $value;
            }
        }

        $embed = [
            'title' => 'Perubahan Data Crew',
            'description' => $userName . ' telah mengubah data Crew.',
            'color' => 16777215,
            'fields' => [],
            'footer' => [
                'text' => 'Diperbarui pada ' . now()->toDateTimeString(),
            ],
        ];

        foreach ($changes as $key => $change) {
            $fieldValue = "Data Sebelum: {$change['old']} \nSetelah: {$change['new']}";
            if ($key == 'foto') {
                $embed['thumbnail'] = [
                    'url' => asset('assets/crew/' . $change['new']),
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

        return redirect('/admin/data-crew')->with('toast_success', 'Data Crew Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crew = crew::find($id);
        $user = Auth::guard('admin')->user();
        $userName = $user->name;
        $namacrew = $crew->name;
        $rolecrew = $crew->roles;
        if ($crew->foto) {
            $tujuan_upload = 'assets/crew';
            $folderDir1 = $tujuan_upload . '/' . $crew->foto;
            if (File::exists($folderDir1)) {
                File::delete($folderDir1);
            }
        }
        $crew->delete();
        $webhookUrl = 'https://discord.com/api/webhooks/1247123618865872908/D5HQVNVcgRSab3bKSMDRR0W7muBqtOGAFfde1fIiImstQGsnfi6PoNO7iojv71szW1L8';
        $embed = [
            'title' => 'Penghapusan Data Crew IGMC',
            'description' => $userName . ' Telah menghapus data Crew.',
            'color' => 16711680,
            'fields' => [
                [
                    'name' => 'Name',
                    'value' => $namacrew,
                    'inline' => true,
                ],
                [
                    'name' => 'Roles',
                    'value' => $rolecrew ?? 'N/A',
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
        return redirect('/admin/data-crew')->with('toast_success', 'Data Crew Berhasil di Delete');
    }
}
