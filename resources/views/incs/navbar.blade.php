<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     <a class="navbar-brand" href="/">
        <i class="fas fa-home"></i>
         Acceuil
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('articles')}}">articles
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        @if (Auth::user())
        @if (Auth::user()->role === 'admin')
          <li class="nav-item active">
            <a class="nav-link" href="{{route('articles.index')}}">Mon espace admin
            </a>
          </li>
        @endif
        <form action="{{ route('logout')}}" method="post">
          @csrf
          <button class="btn nav-link">Déconnexion</button>
        </form>
        @else 
        <li class="nav-item active">
          <a class="nav-link" href="/login">Me connecter
          </a>
        </li>
        @endif
      </ul>
    </div>
  </nav>