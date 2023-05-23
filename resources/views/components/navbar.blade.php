<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container-fluid">
      <i class="fa-brands fa-envira icona"></i>
      <a class="navbar-brand" href="{{ route('homepage') }}">HealthyEarth</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>     
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('article.create') }}">Inserisci un articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('article.index') }}">Tutti gli articoli</a>
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
      </div>
    </div>
  </nav>