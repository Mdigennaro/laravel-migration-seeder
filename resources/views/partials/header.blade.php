<header>
  <div class="container d-flex justify-content-between align-items-center h-100">

    <h1>Travel</h1>
  
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'travels') ? 'active' : ''}}" href="{{route('travels')}}">Pacchetti viaggio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'about') ? 'active' : ''}}" href="{{route('about')}}">Su di noi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'contact') ? 'active' : ''}}" href="{{route('contact')}}">Contatti</a>
      </li>
    </ul>

  </div>
</header>