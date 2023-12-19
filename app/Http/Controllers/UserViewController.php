<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kandidat;
use App\Models\VoteData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class UserViewController extends Controller
{
    public function index(){
        $kandidats = Kandidat::all();
        return view('user.page-vote', $kandidats);
    }

    public function vote(Request $user){
        
        // Cek apakah email sudah ada dalam tabel votedatas
        $VoteDatas = VoteData::where('email', $user->email)->first();
    
        if ($VoteDatas) {
            Session::flash('gagal', 'Anda Sudah Melakukan Vote');
            return redirect()->back();
        }
        VoteData::create([
            'id' => $request->id,
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'username' =>$request->username,
            'role' => $request->role,
            'kandidat_id' => $request->kandidat_id
        ]);
        
        Session::flash('success', ' Voting Berhasil');
        return redirect()->back();
    }
}
