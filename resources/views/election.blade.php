@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Elections</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <h1>Election Name</h1> 

                <div>
                    <form action="/elections" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="name" value="BTW2017">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="state" value="0">
                        <input type="submit" value="Save">
                    </form> 
                </div>

                <h1>Election Candidates</h1> 

                <div>
                    <a href="/elections/{{ $election['id'] }}/candidates/create">Create New Candidate</a>

                    @foreach ($candidates as $candidate)
                        <div>
                            {{ $candidate['name'] }}
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
