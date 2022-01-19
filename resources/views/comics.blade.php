@extends('layouts.main')
@section('main-content')
   <section class="comics">
       <div class="container">
           <div class="cards">
               @foreach ($comics as $comic )
               <div class="card">
                   <div class="card-img">
                       <img src="{{ $comic['thumb']}}" alt="{{$comic['title']}}">

                   </div>
                   <h3> {{ $comic['series'] }}</h3>
               </div>
               @endforeach
           </div>
       </div>
         <div class="text-center">
             <button class="btn"> <h4>load more</h4> </button>
         </div>
   </section>
@endsection