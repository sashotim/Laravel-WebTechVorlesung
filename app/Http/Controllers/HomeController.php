<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (session('status') === 0) {
        //     die("asdf");
        // }
        // else {
        //     die("nono");
        // }

        // print_r(session());
        // die("asdf");
        return view('home');
    }
}
