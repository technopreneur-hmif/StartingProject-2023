<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kandidat;
use App\Models\useraccept;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function ShowDashboard(){
        $title = 'dashboardcms';
        
        $TotalPemilih = useraccept::where('role' , 'pemilih')->count();;
        $JumlahKandidat = Kandidat::count();

        // Mengubah jumlah maksimum kandidat menjadi 4
        $maxKandidat = 4;
        // Mengubah jumlah maksimum pemilih menjadi 2.500
        $maxPemilih = 100;

        // Menghitung presentase total pemilih
        $presentasePemilih = ($TotalPemilih > 0) ? ($TotalPemilih / $maxPemilih) * 100 : 0;
        // Menghitung presentase total kandidat
        $presentaseKandidat = ($JumlahKandidat > 0) ? ($JumlahKandidat / $maxKandidat) * 100 : 0;

        return view('cms.dashboard' ,compact('title','TotalPemilih','JumlahKandidat','presentasePemilih','presentaseKandidat'));
    }

    public function index()
    {
        $users = User::all();
        return view('cms.konfirmasi-pemilih', compact('users') ,[
            'title' => 'konfirmasi-pemilih'
        ]);
    }
    public function create()
    {   
        return view('cms.data-user',[
            'title' => 'data-user'
        ]);
    }
    //data store
    public function store(Request $request)
    {       
        
    //     $validatedData = $request->validate(
    
    //     'email' => [
    //         'required',
    //         Rule::unique('users')->where(function ($query) use ($request) {
    //             return $query->where('email', $request->email);
    //         }),
    //     ];
    // );
        $validatedData = $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email'),
            ],
        ]);
 

        User::create([
            'nama_user' => $request->nama_user,
            'email' => $request->email,
            'username' =>$request->username,
            'password' => Hash::make($request->Password),
            'role' => $request->role
        ]);
        return view('cms.data-user', ['title' => 'data-user'])->with('success', 'User berhasil ditambahkan!');
    }
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();
        Session::flash('success', 'Data Arsip Berhasil Dihapus');
        $users=User::all();
        return redirect()->route('konfirmasi-pemilih.index',compact('users'));
    }
}



