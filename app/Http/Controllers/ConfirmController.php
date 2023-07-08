<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\useraccept;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreConfirmRequest;
use App\Http\Requests\UpdateConfirmRequest;
use App\Models\VoteData;

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
            $user = User::find($id);
        
            Useraccept::create([
                'nama_user' => $user->nama_user,
                'email' => $user->email,
                'username' => $user->username,
                'password' => $user->password,
                'role' => $user->role
            ]);
        
        
        // Redirect kembali ke halaman konfirmasi
        return redirect()->route('konfirmasi-pemilih.index');
    }

}
