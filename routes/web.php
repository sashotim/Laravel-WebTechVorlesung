<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('candidates', 'CandidateController');
Route::resource('elections', 'ElectionController');
Route::resource('results', 'ResultController');
Route::resource('votes', 'VoteController');

Route::get('votes/create/{id}', 'VoteController@vote');
Route::get('elections/{id}/candidates/create', 'CandidateController@createByElectionID');



// Route::put('election', 'ElectionController@update'); // Update an election (open, close)
// Route::post('election', 'ElectionController@store'); // Creates an election

// Route::get('elections/{id}/candidate', 'CandidateController@index'); // Shows the vote input mask for election {id}
// Route::get('elections/{id}/candidate', 'CandidateController@store'); // Creates a vote for election {id}

// Route::get('elections/{id}/vote', 'VoteController@index'); // Shows the vote input mask for election {id}
// Route::get('elections/{id}/vote', 'VoteController@store'); // Creates a vote for election {id}

// Route::get('elections/{id}/result', 'ResultController@index'); // Creates a vote for election {id}

Route::get('/', function () {
    // die("RIP");

    // DB::insert('insert into cars () values ()');

// $table->float('score');
//             $table->integer('round');
//             $table->string('user');
//             $table->string('election');
//             $table->string('candidate');

    $users = DB::select('select * from users');
    print_r($users);
    die("users");

    $data = session()->all();
    print_r($data);
    die("SES");

    DB::insert('insert into votes (round,score,user,election,candidate) values (2,1.0,"Daniel","btw2017","Merkel")');


    // $res = DB::table('votes')->insert([]);
    // die($res);

    $cars = DB::select('select * from votes');

    print_r($cars);
    // foreach ($cars as $car) {
    //     echo $car->id;
    // }

    die("RIP");

    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
