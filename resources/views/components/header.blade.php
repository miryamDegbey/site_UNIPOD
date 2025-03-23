<style>
  .navmenu a.active{
    padding: 8px 25px;
      /* font-weight: bold; */
      color: white;
      background-color: #1D9ED9;
      border-radius: 5px;
      margin-right: 5px;  }
</style>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="{{ Route('welcome') }}" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="transform: scale(2.5)">

   
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="{{ request()->routeIs('welcome') ? 'active' : '' }}">Accueil</a></li>
          <li><a href="{{ route('aboutUs') }}"  class="{{ request()->routeIs('aboutUs') ? 'active' : '' }}">A propos</a></li>
          <li><a href="{{ route('service') }}"  class="{{ request()->routeIs('service') ? 'active' : '' }}">Services</a></li>
          <li><a href="{{ route('support') }}" class="{{ request()->routeIs('support') ? 'active' : '' }}">Projets</a></li>
          <li><a href="{{ route('space') }}" class="{{ request()->routeIs('space') ? 'active' : '' }}">Espaces</a></li>
          <li><a href="{{ route('programs') }}" class="{{ request()->routeIs('programs') ? 'active' : '' }}">Programmes</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('contact') }}">Nous contacter</a>

    </div>
  </header>
