<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kandidat;
use App\Models\VoteData;
use App\Models\useraccept;
use App\Models\VoteDataAccept;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function ShowDashboard(){
        //Menampilkan Hasil vote
        $title = 'dashboardcms';
        
        $TotalPemilih = VoteDataAccept::where('role' , 'pemilih')->count();;
        $JumlahKandidat = Kandidat::count();

        //pemilih
        $maxKandidat = 4;
        $maxPemilih = 300;

        //menghitung presentase
        $presentasePemilih = ($TotalPemilih > 0) ? ($TotalPemilih / $maxPemilih) * 100 : 0;
        $presentaseKandidat = ($JumlahKandidat > 0) ? ($JumlahKandidat / $maxKandidat) * 100 : 0;
        
        $HasilVoting = [];
        $Warna = ['#red','#green','#orange','#blue'];
        $kandidats = Kandidat::all();
    
        foreach ($kandidats as $kandidat) {
            $jumlahSuara = VoteDataAccept::where('kandidat_id', $kandidat->id)->count();
            $HasilVoting[$kandidat->id] = $jumlahSuara;
        }
        return view('cms.dashboard' ,compact('title','TotalPemilih','JumlahKandidat','presentasePemilih','presentaseKandidat','HasilVoting','Warna'));
    }

    public function index()
    {   
        //Menampilkan view Konfirmasi-pemilih
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
        $validatedData = $request->validate(
            [
                'nama_user' => 'required|max:255',
                'email' => 'required|email:rfc,dns|unique:users',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'password' => 'required|min:5|max:255',
                'role' => 'required'
            ]
        );

        //$validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        // $validatedData = $request->validate([
        //     'email' => [
        //         'required',
        //         'email',
        //         Rule::unique('users', 'email'),
        //     ],
        // ]);

        // dd(User::create([
        //     'nama_user' => $request->nama_user,
        //     'email' => $request->email,
        //     'username' =>$request->username,
        //     'password' => Hash::make($request->Password),
        //     'role' => $request->role
        // ]));
        return view('cms.data-user', ['title' => 'data-user'])->with('success', 'User berhasil ditambahkan!');
    }
    public function destroy($id)
    {
        $data = VoteData::where('id', $id)->first();
        $data->delete();
        // Session::flash('success', 'Data Arsip Berhasil Dihapus');
        $VoteDatas=VoteData::all();
        return redirect()->route('konfirmasi-pemilih.index',compact('VoteDatas'));
    }
}



