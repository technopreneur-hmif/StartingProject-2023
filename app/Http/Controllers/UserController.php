<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('cms.data-user',[
            'title' => 'data-user'
        ]);
    }
    //data store
    public function store(Request $request)
    {
        User::create([
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'username' =>$request->username,
            'password' => Hash::make($request->Password),
            'role' => $request->role
        ]);

        return view('data-user', ['title' => 'data-user'])->with('success', 'User berhasil ditambahkan!');
    }

}



