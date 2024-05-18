<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listsaldo;

class TopupsaldoController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showlist()
    {   
        $datalistsaldo = listsaldo::orderBy('id')->distinct()->get();
        return view('dashboard.topupsaldo.index', compact('datalistsaldo'));
    }
}
