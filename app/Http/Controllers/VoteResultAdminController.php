<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\VoteDataAccept;
use App\Models\Kandidat;
use Illuminate\Http\Request;


class VoteResultAdminController extends Controller
{
    public function index()
    {
        $allVotes = VoteDataAccept::count();
        $candidates_id = Kandidat::pluck('id');;
        $candidateResults = [];

        foreach($candidates_id as $candidate_id) 
        {
            $votesOnCandidate = VoteDataAccept::where('kandidat_id', $candidate_id)->count();
            if(!$votesOnCandidate) {
                $percentage = 0;
            } else {
                $percentage = ($votesOnCandidate/$allVotes)*100;
            }
            $candidateName = Kandidat::where('id', $candidate_id)->value('nama_kandidat');
            $candidateResults[$candidateName] = $percentage; 
        }

        return view('user.hasil-voting-admin', [
            'candidateResults' => $candidateResults
        ]);
    }
}
