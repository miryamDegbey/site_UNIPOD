
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="transform: scale(2.5)">

   
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Accueil</a></li>
          <li><a href="{{ route('aboutUs') }}">A propos</a></li>
          <li><a href="{{ route('support') }}">Accompagnement</a></li>
          <li><a href="{{ route('space') }}">Espaces</a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('contact') }}">Nous contacter</a>

    </div>
  </header>
