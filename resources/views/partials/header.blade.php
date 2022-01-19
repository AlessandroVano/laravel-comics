<header class="main-header">
  <div class="container">
    <a href="/">
      <img   src="{{ asset('images/dc-logo.png') }}" alt="">
    
    </a>
       <ul>
         <li>
           <a  href="{{ route('comics')}}"
           @if (Request::route()->getName() === 'comics') class="active" @endif>
           Comics</a>
         </li>
         <li>
           <a href="{{ route('news') }}"
           @if (Request::route()->getName() === 'news') class="active" @endif>
           News</a>
         </li>
       </ul>

  </div>
</header>