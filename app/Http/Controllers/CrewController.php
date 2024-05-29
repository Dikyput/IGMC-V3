<?php

namespace App\Http\Controllers;

use App\Models\crew;
use Illuminate\Http\Request;
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
        return view('admin.crew.tambah');
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
        $crew = crew::find($id);
        $data = [
            'name' => $request->name,
            'roles' => $request->roles,
        ];

        if ($request->hasFile('foto')) {
            $tujuan_upload = 'assets/crew';
            $file = $request->file('foto');
            $filegambar = time() . "_" . $file->getClientOriginalName();
            $file->move($tujuan_upload, $filegambar);

            $folderDir1 = $tujuan_upload . '/' . $crew->foto;
            File::delete($folderDir1);
            $data['foto'] = $filegambar;
        }

        $crew->update($data);
        return redirect('/admin/data-crew')->with('toast_success', 'Data Crew Berhasil di Ubah');
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
        if ($crew->foto) {
            $tujuan_upload = 'assets/crew';
            $folderDir1 = $tujuan_upload . '/' . $crew->foto;
            if (File::exists($folderDir1)) {
                File::delete($folderDir1);
            }
        }
        $crew->delete();
        return redirect('/admin/data-crew')->with('toast_success', 'Data Crew Berhasil di Delete');
    }
}
