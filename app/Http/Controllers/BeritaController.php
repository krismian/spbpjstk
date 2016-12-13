<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BeritaController extends Controller
{
    public function index() {
        $berita = Berita::where('sifat_id','1')->paginate(6);
        return view('berita.index', compact('berita'));
    }

    public function alternatif() {
        $berita = Berita::where('sifat_id','1')->paginate(6);
        return view('berita.index_backup', compact('berita'));
    }

    public function internal() {
        $berita = Berita::where('sifat_id','')->paginate(6);
        return view('berita.indexInternal', compact('berita'));
    }
    
    public function show($id) {
        $berita = Berita::where('id', $id)->first();
        $komentar = $berita->komentar()->get();
        return view('berita.show', compact('berita', 'komentar'));
    }



    public  function postKomentar(Request $request, $id) {
        $berita = Berita::where('id', $id)->first();
        $komentar = $request->input('komentar');
        $user = Auth::user();
        $berita->komentar()->create(['isi' => $komentar, 'user_id' => $user->id]);

        return redirect('/');
    }
}
