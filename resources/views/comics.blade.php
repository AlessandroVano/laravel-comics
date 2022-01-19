@extends('layouts.main')
@section('main-content')
    @foreach ($comics as $comic )
        <div class="card">
            <img src="{{ $comic['thumb']}}" alt="{{$comic['title']}}">
            <h3> {{ $comic['series'] }}</h3>
        </div>
    @endforeach
@endsection