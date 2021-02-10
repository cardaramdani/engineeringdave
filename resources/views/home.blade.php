@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    Yeay, Kamu sudah login.
                    Silahkan menuju Homescreen dan klik link di bawah

                    <div class="nav-item font-weight-bold border border-succsses rounded">
                        <a class="nav-link text-success" href="{{ url('/homescreen')}}">Go To Homescreen</a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
