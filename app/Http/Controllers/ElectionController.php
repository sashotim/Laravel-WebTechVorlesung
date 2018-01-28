<?php

namespace App\Http\Controllers;

use App\Election;
use App\Vote;
use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ElectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // GET /elections

        // die("" . Auth::user()->getId());

        // $elections = Election::all();
        // die("".$elections->count());
        // print_r($elections);
        // print_r($elections->first());
        // print_r($elections->where('user_id', Auth::user()->getId())->count());

        // print_r($elections->toArray()); die();

        $elections = Election::all();
        return view('elections', [
            'elections' => $elections->toArray(),
            'user_id' => Auth::user()->getId()
            // 'elections' => $elections->where('user_id', Auth::user()->getId())->toArray(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET /elections/create

        $election = new Election;

        $election->name = "New Election";
        $election->state = 0;
        $election->user_id = Auth::user()->getId();

        $election->save();

        // DB::insert('insert into elections (name,state,user_id) values ("Test",0,0)');

        return view('election',['elections' => []]); // TODO: 'elections' => $election->toArray()
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST /elections

        $elect = new Election;

        $elect->name = $request->name;
        $elect->state = $request->state;
        $elect->user_id = Auth::user()->getId();

        $elect->save();
        // return view('election', [data => $elect]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function show(Election $election)
    {
        // /elections/{id}
        die('showasdf');
        print_r($election);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function edit(Election $election)
    {
        if ($election->user_id == Auth::user()->getId()) {
            
        }

        // die("".$election->id);

        $candidates = Candidate::all()->where('election_id', $election->id);

        // die("edit");
        return view('election', [
            'election' => $election,
            'candidates' => $candidates,
            'user_id' => Auth::user()->getId()
            // 'elections' => $elections->where('user_id', Auth::user()->getId())->toArray(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Election $election)
    {
        // /elections/{id}/edit
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function destroy(Election $election)
    {
        //
    }
}
