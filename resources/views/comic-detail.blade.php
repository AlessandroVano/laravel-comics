@extends('layouts.main')
@section('main-content')
    <section class="comics-detail">
        <div class="container">
           <div class="card-single">
            <img src="{{ $comic['thumb']}}" alt="{{$comic['title']}}">
    
           </div>
        </div>
    </section>
    
@endsection