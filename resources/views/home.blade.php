@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #E5E5E5">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                        <h2 style="color: red">Hello {{ Auth::user()->name }}, you are logged in!</h2>
                        <h3>Make sure your detaits:</h3><br>
                        Email: {{ Auth::user()->email }} <br>
                        Address: {{ Auth::user()->address }} <br>
                        Gender: {{ Auth::user()->gender }} <br>
                        Contact: {{ Auth::user()->contact }} <br>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
