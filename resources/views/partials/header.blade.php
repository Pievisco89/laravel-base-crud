<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container-fluid">
    
    <img src="{{ asset('img/dc-logo.png') }}" class="me-3" style="width: 50px" alt="logo">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  
        <li class="nav-item">
          <a class="nav-link @if ( Request::route()->getName() === 'comics.index') active @endif" href="{{ route('comics.index') }}">Comics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if ( Request::route()->getName() === 'comics.create') active @endif" href="{{ route('comics.create') }}">New Comic</a>
        </li>
        
      </ul>
          
    </div>

  </div>
</nav>