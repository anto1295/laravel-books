<nav class='theme--{{$theme}}'>

  {{-- <a href={{route('home')}}>Home</a> --}}

  @if ($current_menu_item == 'home')

  <span>Home</span>

  @else

  <a href={{route('home')}}>Home</a>

  @endif

  @if ($current_menu_item == 'about-us')

  <span>About Us</span>

  @else

  <a href={{route('about-us')}}>About Us</a>

  @endif

  

</nav>