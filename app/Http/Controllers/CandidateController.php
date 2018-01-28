<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('candidate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidate');
    }

    public function createByElectionID($election_id)
    {
        //
        // die("addCandidate".$election->name);

        // print_r($id);
        // die("die");

        $c = new Candidate;
        $c->name = "";
        $c->election_id = $election_id; // $election->id;
        $c->save();

        return view('candidate', ['candidate' => $c, 'candidate_id' => $c->getId()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // print_r(Candidate::all()->toArray());

        $cands = Candidate::all()->where('id', $request->candidate_id);

        if ($cands->count() > 0) {
            $cands->first()->name = $request->name;
            $cands->first()->save();
        }


        // if (Candidate::all()->where('name', $request->name)->where('election_id', $request->election_id)->count() == 0) {

        //     $cand = new Candidate;

        //     print_r($request->name);
        //     print_r($request->election_id);
        //     die("asdf11");

        //     $cand->name = $request->name;
        //     $cand->election_id =  $request->election_id;

        //     $cand->save(); 
        // }
        // else {
        //     die("trying");
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
