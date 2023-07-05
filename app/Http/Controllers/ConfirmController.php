<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\useraccept;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreConfirmRequest;
use App\Http\Requests\UpdateConfirmRequest;

class ConfirmController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('cms.confirm', compact('users') ,[
            'title' => 'konfirmasi-pemilih'
        ]);
    }

    // public function show($id)
    // {
    //     $user = User::where('id', $id)->first();
    //     return view('cms.confirm', compact('user'));
    // }

    public function show($id)
{
    $user = User::find($id);
    if (!$user) {
        abort(404); // Menampilkan 404 jika pengguna tidak ditemukan
    }
    return view('cms.confirm', compact('user'),[
        'title' => 'konfirmasi-pemilih'
    ]);
}
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();

        $users=User::all();
        return redirect()->route('konfirmasi-pemilih.index',compact('users'));
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
        
            $user->delete();
        
        // Redirect kembali ke halaman konfirmasi
        return redirect()->route('konfirmasi-pemilih.index');
    }

}
