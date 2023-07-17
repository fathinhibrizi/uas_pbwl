@extends('layouts.main')

@section('main-body')
@if (session()->has('loginSuccess'))
        {!! session('loginSuccess') !!}
@endif

<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="alert alert-success" role="alert">
        <h3>
            SELAMAT DATANG DI CV AGRIBISNIS, {{ auth()->user()->user_nama }}!
        </h3>
        <img src="{{ asset('img/pupukk.jpeg') }}" alt="" width="" height="400" position="center"> 

    </div>
</div>
@endsection