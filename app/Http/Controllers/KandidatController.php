<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Routing\Controller;
// use App\Http\Requests\StoreKandidatRequest;
// use App\Http\Requests\UpdateKandidatRequest;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index()
    {

        $title = 'data-kandidat';
        return view('cms.data-kandidat', compact('title')
        );
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_kandidat' => 'required|max:255',
            'tentang_kandidat' => 'required',
            'prodi_Kandidat' => 'required',
            'visi_kandidat' => 'required',
            'misi_kandidat' => 'required',
            'link_foto_kandidat' => 'image|file|max:1024'
        ]);

        if($request->file('link_foto_kandidat')) {
            $validatedData['link_foto_kandidat'] = $request->file('link_foto_kandidat')->store('foto-kandidat');
        }

        Kandidat::create($validatedData);

        return view('cms.data-kandidat', ['title' => 'data-kandidat'])->with('success', 'User berhasil ditambahkan!');
    }
}
