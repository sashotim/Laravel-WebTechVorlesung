@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <div>
                    <ul>
                        <li><a href="elections">Elections</a></li>
                        <li><a href="elections/create">Elections Create</a></li>
                        <li><a href="elections/1">Elections Show(1)</a></li>
                        <li><a href="candidates">Candidates</a></li>
                        <li><a href="candidates/create">Candidates Create</a></li>
                        <li><a href="votes">Votes</a></li>
                        <li><a href="votes/create">Votes Create</a></li>
                        <li><a href="results">Results</a></li>
                        <li><a href="results/1">Results Show(1)</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
