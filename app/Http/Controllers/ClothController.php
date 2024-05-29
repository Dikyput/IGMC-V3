<?php

namespace App\Http\Controllers;

use App\Models\itemCloth;
use Illuminate\Http\Request;

class ClothController extends Controller
{
    public function create()
    {
        $title = 'Data Penjualan';
        return view('admin.penjualan.tambahcloth', ['title' => $title]);
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
            'id_cloth' => 'required',
            'name' => 'required',
            'img' => 'required',
            'texture' => 'required',
            'tipe' => 'required',
            'drawable' => 'required',
            'tier' => 'required',
        ]);

        itemCloth::create([
            'id_cloth' => $request->id_cloth,
            'name' => $request->name,
            'img' => $request->img,
            'texture' => $request->texture,
            'tipe' => $request->tipe,
            'drawable' => $request->drawable,
            'tier' => $request->tier,
        ]);
        return redirect('/admin/data-penjualan')->with('toast_success', 'Data Berhasil di Tambahkan');
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
        $title = 'Data Penjualan';
        $listcloth = listCloth::find($id);
        return view('admin.penjualan.editcloth', [
            'listcloth' => $listcloth,
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
