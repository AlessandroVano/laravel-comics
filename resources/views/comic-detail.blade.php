@extends('layouts.main')
@section('main-content')
    <section class="comics-detail">
        <div class="container">
           <div class="card-single">
                   <img class="im" src="{{ $comic['thumb']}}" alt="{{$comic['title']}}">
                       <strong class="text-1">coming book</strong>
                       <strong class="text-2">view gallery</strong>
           </div>
        </div>
    </section>

     <section class="info">
         <div class="container-2 d-flex">
             <div class="d-flex">
                 <div class="section-left">
                     <h1>{{ $comic['title']}}</h1>
                     <div class="prezzo d-flex">
                         <div class=" d-flex flex-grow justify-content-b p  ">
                             <span>US Price: <span>{{ $comic['price']}}</span></span>
                             <span>AVAIABLE</span>
                         </div>
                         <div class="padding">
                             <span>Check Availability</span>
                         </div>
                        </div>
                        <p>{{ $comic['description']}}</p>
                    </div>
                   <div class="section-right">
                       <h2> ADVERTISEMENT</h2>
                       <img src="{{ asset('images/adv.jpg') }}" alt="">
                 </div>
             </div>
         </div>
     </section>
   

    
@endsection