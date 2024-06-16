<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use App\Models\Comment;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->firstOrFail();
        $postakhir = Artikel::latest('updated_at')->take(3)->get();
        $postakhir = Artikel::latest('updated_at')->take(3)->get();
        $jumlahKomentar = $artikel->comments()->count();
        $categories = Category::select('categories.id', 'categories.name', DB::raw('COUNT(artikel.id) as artikel_count'))
            ->leftJoin('artikel', 'categories.id', '=', 'artikel.category_id')
            ->groupBy('categories.id', 'categories.name')
            ->orderBy('categories.name')
            ->get();
        return view('landingpage.artikel.show', compact('artikel', 'categories', 'postakhir', 'jumlahKomentar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'artikel_id' => 'required|exists:artikel,id',
            'content' => 'required',
        ]);
        $user = Auth::user();
        $comment = new Comment();
        $comment->id_discord = $user->id_discord;
        $comment->artikel_id = $request->artikel_id;
        $comment->content = $request->content;
        $comment->save();

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }

}
