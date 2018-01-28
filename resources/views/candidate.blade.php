@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Candidate</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div>
                    <form action="/candidates" method="post">
                        {{ csrf_field() }}
                        <input type="text" name="name" placeholder="Name">
                        <input type="hidden" name="candidate_id" value="{{ $candidate_id }}">
                        <input type="hidden" name="election_id" value="{{ $candidate->election_id }}"> 
                        <input type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
