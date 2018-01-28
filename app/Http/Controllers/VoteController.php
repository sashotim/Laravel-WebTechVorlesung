<?php

namespace App\Http\Controllers;

use App\Vote;
use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votes = Vote::all();
        // return view('vote', ['votes' => $votes->where('user_id', Auth::user()->getId())->toArray()]);
        return view('vote', ['votes' => $votes->toArray()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        die("+");
        // GET /votes/create

        // $candidates = Candidates::all()->where('election_id', 0)->toArray();
        $candidates = [];
        return view('vote',['candidates' => $candidates]);
    } 
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vote($election_id)
    {
        // GET /elections/{id}/vote
        // die("+++".$election_id);

        // $v = new Vote;
        // $v->user_id = Auth::user()->getId();
        // $v->election_id = $election_id;
        // $v->save();

        $candidates = Candidate::all()->where('election_id', $election_id)->toArray();
        return view('vote',['candidates' => $candidates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /votes

        $vote = new Vote;
        $vote->user_id = Auth::user()->getId();
        $vote->election_id = 1;
        $vote->candidate_id = 0;
        $vote->score = 0;
        $vote->round = 0;
        $vote->save();
        
        // DB::insert('insert into elections (name,state,user_id) values ("Test",0,0)');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
        die("asdf");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
