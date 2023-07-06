<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserViewController extends Controller
{
    public function index(){
        $kandidats = Kandidat::all();
        return view('user.page-vote', compact(['kandidats']));
    }
}
