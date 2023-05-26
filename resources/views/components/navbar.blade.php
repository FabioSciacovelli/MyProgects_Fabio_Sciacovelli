<nav class="navbar navbar-expand-lg navbar-dark background-test fixed-top text-primaryC">
    <div class="container-fluid">
      <i class="fa-brands fa-envira icona"></i>
      <a class="navbar-brand @if(Route::currentRouteName() == 'homepage') active @endif" href="{{ route('homepage') }}">HealthyEarth</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @if(Route::currentRouteName() == 'article.byCategory') active @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
              <li><a class="dropdown-item" href="{{ route('article.byCategory', compact('category')) }}">{{ $category->name }}</a></li>
              @if (!($loop->last))
              <li><hr class="dropdown-divider"></li>
              @endif
              @endforeach                          
            </ul>
          </li>
          @if(Auth::user() && Auth::user()->is_writer)
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'article.create') active @endif" href="{{ route('article.create') }}">Inserisci un articolo</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() == 'article.index') active @endif" href="{{ route('article.index') }}">Tutti gli articoli</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a>
              </li>
              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao Ospite
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
            </ul>
          </li>
          @endauth
        </ul>
        {{--<form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>--}}
        
        <a class="nav-link text-light me-5 @if(Route::is('careers')) active @endif" href="{{ route('careers') }}">Lavora con noi</a>

        @if(Auth::user() && Auth::user()->is_admin)
            <a class="nav-link text-light me-5 @if(Route::is('admin.dashboard')) active @endif" href="{{ route('admin.dashboard') }}">Dasboard Amministratore</a>
        @endif

        @if(Auth::user() && Auth::user()->is_revisor)
            <a class="nav-link text-light me-5 @if(Route::is('revisor.dashboard')) active @endif" href="{{ route('revisor.dashboard') }}">Dasboard Revisore</a>
        @endif

      </div>
    </div>
  </nav>