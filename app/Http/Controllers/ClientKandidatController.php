<?php

namespace App\Http\Controllers;
use App\Models\Kandidat;
use Illuminate\Routing\Controller;

use Illuminate\Http\Request;

class ClientKandidatController extends Controller
{
    public function index()
    {
        return view('user.calon-kandidat', [
            "active" => 'calon-kandidat',
            "candidates" => Kandidat::all()
        ]);
    }

    public function show(Kandidat $calon)
    {
        return view('user.detail-kandidat', [
            "active" => 'calon-kandidat',
            "candidate" => $calon
        ]);
    }
}
