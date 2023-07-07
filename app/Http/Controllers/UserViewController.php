<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kandidat;
use App\Models\VoteData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserViewController extends Controller
{
    public function index(){
        $kandidats = Kandidat::all();
        $user = User::where('id', 84)->first();
        return view('user.page-vote', compact(['kandidats','user']));
    }
    public function vote(Request $request ,$id){

        VoteData::create([
            'id' => $request->id,
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'role' => $request->role,
            'kandidat_id' => $request->role
        ]);
        
        $kandidats = Kandidat::all();
        $user = User::where('id', 84)->first();
        return view('user.page-vote', compact(['kandidats','user']));

        
    }
}
