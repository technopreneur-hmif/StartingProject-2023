<?php

namespace App\Http\Controllers;

use App\Models\useraccept;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

use App\Http\Requests\StoreuseracceptRequest;
use App\Http\Requests\UpdateuseracceptRequest;

class UseracceptController extends Controller
{
   
    public function move($id)
    {
            $user = User::find($id);
        
            Useraccept::create([
                'nama_user' => $user->nama_user,
                'email' => $user->email,
                'username' => $user->username,
                'role' => $user->role
            ]);
        
            $user->delete();
        
        // Redirect kembali ke halaman konfirmasi
        return redirect()->route('konfirmasi-pemilih');
    }
}