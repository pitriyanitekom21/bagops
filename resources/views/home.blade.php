@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <marquee class="py-3" behavior="alternate" direction="left">
                    <h1 style="color: black;">Selamat Datang Di Halaman <strong>{{ Auth::user()->name }}</strong></h1>
                </marquee>
            </div>
            <div class="card mt-sm-5 mt-md-0">
                <img alt="image" src="{{ asset('pitri') }}/assets/images/pres.jpg" >
              </div>
            </div>
        </div>
        
    </div>
    
</div>

@endsection
