<nav>
    <input id="nav-toggle" type="checkbox" />
    <img
      class="logo"
      src="/images/logo-web.svg"
      height="60"
      alt="logo-web"
    />
    <ul class="links">
      <li><a href="/" class="{{ Request::is('/') || Request::is('page-vote') ? 'active-nav' : '' }}
        ">Beranda</a></li>
      <li>
        <a href="/calon-kandidat" class="{{ Request::is('calon-kandidat') || Request::is('detail-kandidat*') ? 'active-nav' : '' }}">Calon Kandidat</a>
      </li>
      <li><a href="/cara-voting" class="{{ Request::is('cara-voting') ? 'active-nav' : '' }}">Cara Voting</a></li>
      @can('admin')
      <li><a href="/hasil-voting-admin" class="{{ Request::is('hasil-voting-admin') ? 'active-nav' : '' }}">Hasil Voting</a></li>
      <li><a href="/Dashboard" class="{{ Request::is('Dashboard') ? 'active-nav' : '' }}">Dashboard</a></li>
      @else
      <li><a href="/hasil-voting" class="{{ Request::is('hasil-voting') ? 'active-nav' : '' }}">Hasil Voting</a></li>
      @endcan
      <li>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit"><i class="fa fa-door-open"></i> Logout</button>
        </form>
      </li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>