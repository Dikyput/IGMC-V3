<?php

namespace App\Http\Controllers;

use App\Models\JadwalTournamen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JadwalTournamenController extends Controller
{
    public function index()
    {
        $jadwal = JadwalTournamen::get();
        $title = 'Data Tournamen';
        return view('admin.turnamen.index', [
            'jadwal' => $jadwal,
            'title' => $title,
        ]);
    }

    public function create()
    {
        $title = 'Data Tournamen';
        return view('admin.turnamen.tambah', [
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
        $this->validate($request, [
            'status' => 'required',
            'name_event' => 'required',
            'jadwal' => 'required',
            'pukul' => 'required',
        ]);

        $filegambar = null;

        if ($request->hasFile('foto')) {
            $tujuan_upload = 'assets/tournamen/';
            $file = $request->file('foto');
            $filegambar = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar);
        }

        JadwalTournamen::create([
            'status' => $request->status,
            'name_event' => $request->name_event,
            'jadwal' => $request->jadwal,
            'pukul' => $request->pukul,
            'link_youtube' => $request->link_youtube,
            'foto' => $filegambar,
        ]);
        return redirect('/admin/data-turnamen')->with('toast_success', 'Data Tournamen Berhasil di Tambahkan');
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
        $title = 'Data Tournamen';
        $jadwal = JadwalTournamen::find($id);
        return view('admin.turnamen.edit', [
            'jadwal' => $jadwal,
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
        $jadwal = JadwalTournamen::find($id);
        $data = [
            'status' => $request->status,
            'name_event' => $request->name_event,
            'jadwal' => $request->jadwal,
            'pukul' => $request->pukul,
            'link_youtube' => $request->link_youtube,
        ];

        if ($request->hasFile('foto')) {
            $tujuan_upload = 'assets/turnamen';
            $file = $request->file('foto');
            $filegambar = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar);

            $folderDir1 = $tujuan_upload . '/' . $jadwal->foto;
            File::delete($folderDir1);
            $data['foto'] = $filegambar;
        }

        $jadwal->update($data);
        return redirect('/admin/data-turnamen')->with('toast_success', 'Data Tournamen Berhasil di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = JadwalTournamen::find($id);
        if ($jadwal->foto) {
            $tujuan_upload = 'assets/turnamen';
            $folderDir1 = $tujuan_upload . '/' . $jadwal->foto;
            if (File::exists($folderDir1)) {
                File::delete($folderDir1);
            }
        }
        $jadwal->delete();
        return redirect('/admin/data-turnamen')->with('toast_success', 'Data Tournamen Berhasil di Delete');
    }
}
