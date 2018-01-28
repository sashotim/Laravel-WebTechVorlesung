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

                <div>
                    Total: {{ sizeof($elections) }}
                </div> 

                <h1>List of Elections</h1> 
                <div>
                    @foreach ($elections as $election)
                        <div>
                            {{ $election['name'] }}
                            {{ App\Election::getStateString($election['state']) }}
                       
                            <a href="votes/create/{{ $election['id'] }}">vote</a>
                            @if($election['user_id'] == $user_id)                            
                                | <a href="/elections/{{ $election['id'] }}/edit">edit</a>
                            @else
                            @endif
                        </div>
                    @endforeach
                </div>
 

                <h1>Create New Election</h1>

                <form action="/elections" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="name" value="BTW2017">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="state" value="0">
                    <input type="submit" value="Create New Election">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
