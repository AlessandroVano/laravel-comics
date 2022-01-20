@extends('layouts.main')
@section('main-content')
   <section class="comics">
       <div class="container">
           <div class="cards">
               @foreach ($comics as $index => $comic )
               <div class="card">
                   {{-- AGGIUNTA LINK --}}
                   <a href="{{ route('comic-detail', ['id' => $index])}}">
                       <div class="card-img">
                           <img src="{{ $comic['thumb']}}" alt="{{$comic['title']}}">
    
                       </div>
                            <h3> {{ $comic['series'] }}</h3>
                        </a>
                    </div>
               @endforeach
           </div>
       </div>
         <div class="text-center">
             <button class="btn"> <h4>load more</h4> </button>
         </div>
   </section>
@endsection