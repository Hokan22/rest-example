<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $Candidates  = Candidate::all();

        return response()->json($Candidates);
    }

    public function getCandidate($id)
    {
        $Candidate  = Candidate::find($id);

        return response()->json($Candidate);
    }

    public function createCandidate(Request $request)
    {
        $Candidate = Candidate::create($request->all());

        return response()->json($Candidate);
    }

    public function deleteCandidate($id)
    {
        $Candidate  = Candidate::find($id);
        $Candidate->delete();

        return response()->json('deleted');
    }

    public function updateCandidate(Request $request,$id)
    {
        $Candidate  = Candidate::find($id);

        $Candidate->vorname = $request->input('vorname');
        $Candidate->nachname = $request->input('nachname');
        $Candidate->firma = $request->input('firma');
        $Candidate->aktuelle_position = $request->input('aktuelle_position');

        $Candidate->save();

        return response()->json($Candidate);
    }
}
