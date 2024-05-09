@extends('layouts.mainlayout')

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
                    <br/>
                    @if (Auth::check())
                    <a href="{{ route('logout') }}">
                        Logout
                    </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
