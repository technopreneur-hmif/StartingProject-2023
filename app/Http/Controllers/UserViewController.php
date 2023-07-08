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
        $user = User::where('id', 90)->first();
        return view('user.page-vote', compact(['kandidats','user']));
    }
    public function vote(Request $request ,$id){

        $email = $request->email;
        // Cek apakah email sudah ada dalam tabel votedatas
        $VoteDatas = VoteData::where('email', $email)->first();
    
        if ($VoteDatas) {
            Session::flash('gagal', 'Anda Sudah Melakukan Vote');
            return redirect()->back();
        }
        VoteData::create([
            'id' => $request->id,
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'role' => $request->role,
            'kandidat_id' => $request->kandidat_id
        ]);
        
        Session::flash('success', ' Voting Berhasil');
        return redirect()->back();
    }
}
