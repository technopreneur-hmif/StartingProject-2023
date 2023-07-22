<?php

namespace App\Http\Controllers;
use App\Models\Kandidat;
use App\Models\VoteData;
use App\Models\VoteDataAccept;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class VoteController extends Controller
{
    public function index(){
        $candidates = Kandidat::all();
        return view('user.page-vote', [
            'candidates' => $candidates
        ]);
    }

    public function vote(Request $user){
        
        // Cek apakah email sudah ada dalam tabel votedatas
        $VoteDatas = VoteData::where('email', $user->email)->first();
        $VoteDatasAccept = VoteDataAccept::where('email', $user->email)->first();
    
        if ($VoteDatas || $VoteDatasAccept) {
            Session::flash('gagal', 'Anda Sudah Melakukan Vote');
            return redirect()->back();
        }
        
        VoteData::create([
            'id' => $user->id,
            'nama_user' => $user->nama_user,
            'email' => $user->email,
            'username' =>$user->username,
            'role' => $user->role,
            'kandidat_id' => $user->kandidat_id
        ]);
        
        Session::flash('success', ' Voting Berhasil');
        return redirect()->back();
    }
}
