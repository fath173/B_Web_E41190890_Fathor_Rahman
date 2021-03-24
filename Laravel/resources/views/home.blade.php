@extends('layouts.app')
@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Home Page</h1>
            <p class="lead">This is the home page</p>
        </div>
        <p>Nama : {{$nama}}</p>
        <p>Mata pelajaran</p>
        <ul>
            @foreach ($pelajaran as $plj)
                <li>{{$plj}}</li>
            @endforeach
        </ul>
    </div>
@endsection
