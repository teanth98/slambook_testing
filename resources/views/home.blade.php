@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    <a href="/posts/create" class="btn btn-primary">Add Your Slambook Details</a>
                    <a href="add" class="btn btn-primary">Add Your Slambook Details NOsql</a>
                    <br>
                    <p> Click Below To Logout</p>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
