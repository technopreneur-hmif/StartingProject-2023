<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Routing\Controller;
// use App\Http\Requests\StoreKandidatRequest;
// use App\Http\Requests\UpdateKandidatRequest;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function create()
    {
        return view('cms.data-kandidat',[
            'title' => 'data-kandidat'
        ]);
    }

    public function store(Request $request)
    {
        Kandidat::create([
            'nama_kandidat' => $request->nama_kandidat,
            'tentang_kandidat' => $request->tentang_kandidat,
            'prodi_Kandidat' =>$request->prodi_Kandidat,
            'visi_kandidat' => $request->visi_kandidat,
            'misi_kandidat' => $request->misi_kandidat,
            'link_foto_kandidat' => $request->link_foto_kandidat
        ]);

        return view('cms.data-kandidat', ['title' => 'data-kandidat'])->with('success', 'User berhasil ditambahkan!');
    }
}
