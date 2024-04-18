<header>

    <li class="nav justify-content-center">
        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'bg-dark' : ' '}}" href="{{route('home')}}">Home</a>
        <a class="nav-link {{Route::currentRouteName() === 'contacts' ? 'bg-dark' : ' '}}" href="{{route('contacts')}}">Contacts</a>
        <a class="nav-link {{Route::currentRouteName() === 'about' ? 'bg-dark' : ' '}}" href="{{route('about')}}">About</a>
    </li>










</header>