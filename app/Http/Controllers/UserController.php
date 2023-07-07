<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kandidat;
use App\Models\VoteData;
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

        $maxKandidat = 4;
        $maxPemilih = 100;

        $presentasePemilih = ($TotalPemilih > 0) ? ($TotalPemilih / $maxPemilih) * 100 : 0;
        $presentaseKandidat = ($JumlahKandidat > 0) ? ($JumlahKandidat / $maxKandidat) * 100 : 0;

        return view('cms.dashboard' ,compact('title','TotalPemilih','JumlahKandidat','presentasePemilih','presentaseKandidat'));
    }

    public function index()
    {   
        $title = 'konfirmasi-pemilih';
        $VoteDatas = VoteData::all();
        return view('cms.konfirmasi-pemilih', compact('VoteDatas','title'));
    }
    public function create()
    {   
        return view('cms.data-user',[
            'title' => 'data-user'
        ]);
    }
    public function store(Request $request)
    {       

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
        // Session::flash('success', 'Data Arsip Berhasil Dihapus');
        $users=User::all();
        return redirect()->route('konfirmasi-pemilih.index',compact('users'));
    }
}



