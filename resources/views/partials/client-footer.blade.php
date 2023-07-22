<footer>
    <div class="footer-nav">
      <img src="/images/logo-web.svg" height="60" alt="logo-web" />
      <div class="foot-menu">
        <a href="/" class="nav-item nav-link">Beranda</a>
        <a href="/calon-kandidat" class="nav-item nav-link">Calon Kandidat</a>
        <a href="/cara-voting" class="nav-item nav-link">Cara Voting</a>
        @can('admin')
         <a href="/hasil-voting-admin" class="nav-item nav-link">Hasil Voting</a>         
         <a href="/Dashboard" class="nav-item nav-link">Dashboard</a>         
        @else
         <a href="/hasil-voting" class="nav-item nav-link">Hasil Voting</a>          
        @endcan
      </div>
    </div>
    <hr />
    <div class="footer-copyright">
       &copy; 2023 HMIF ITERA. All rights reserved.
    </div>
</footer>