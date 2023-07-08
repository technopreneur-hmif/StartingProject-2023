<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\VoteData;
use App\Models\useraccept;
use App\Models\VoteDataAccept;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreConfirmRequest;
use App\Http\Requests\UpdateConfirmRequest;

class ConfirmController extends Controller
{
    public function index()
    {
        $title = 'konfirmasi-pemilih';
        // $users = User::all();
        $VoteDatas = VoteData::all();
        return view('cms.confirm', compact('users','VoteDatas','title'));
    }

    public function show($id)
{
    $VoteData = VoteData::find($id);
    if (!$VoteData) {
        abort(404); // Menampilkan 404 jika pengguna tidak ditemukan
    }
    return view('cms.confirm', compact('VoteData'),[
        'title' => 'konfirmasi-pemilih'
    ]);
}
    public function destroy($id)
    {
        $data = VoteData::where('id', $id)->first();
        $data->delete();

        $VoteDatas = VoteData::all();
        return redirect()->route('konfirmasi-pemilih.index',compact('VoteDatas'));
    }

    public function move($id)
    {
            $VoteDataAccept = VoteData::find($id);
        
            VoteDataAccept::create([
                'nama_user' => $VoteDataAccept->nama_user,
                'email' => $VoteDataAccept->email,
                'username' => $VoteDataAccept->username,
                'role' => $VoteDataAccept->role,
                'kandidat_id' => $VoteDataAccept->kandidat_id
            ]);

        session(['moveRedirect' => true]);
        return redirect()->route('konfirmasi-pemilih.index');
    }

}
