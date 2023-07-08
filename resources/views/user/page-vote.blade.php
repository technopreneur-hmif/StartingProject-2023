<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Voting</title>

    <link rel="stylesheet" href="/css/page-vote.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <nav>
        <input id="nav-toggle" type="checkbox" />
        <img
          class="logo"
          src="images/logo-web.svg"
          height="60"
          alt="logo-web"
        />
        <ul class="links">
          <li><a href="./beranda.html" class="active-nav">Beranda</a></li>
          <li>
            <a href="./calon-kandidat.html">Calon Kandidat</a>
          </li>
          <li><a href="./cara-voting.html">Cara Voting</a></li>
          <li><a href="./hasil-voting.html">Hasil Voting</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
      </nav>

      <section>
        <div class="container-kandidat">
          <div class="title">
            <h1>Vote</h1>
          </div>

        @if (session('gagal'))
          <div class="alert alert-danger">
              {{ session('gagal') }}
          </div>
        @endif
    
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
          <div class="kandidat">
            <div class="kandidat-list">
              @foreach($kandidats as $kandidat)
              <div class="kandidat-card">
                <img class="foto-kandidat" src="{{ $kandidat->link_foto_kandidat }}" alt="foto-kandidat">
                <button style="position: absolute; bottom:0; margin-bottom: 140px" id="btn-vote" 
                  class="vote-button" data-popup-target="{{ $kandidat->id }}">Vote</button>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      


      <div class="popup">
        <form action="{{ route('vote',$user->id) }}" method="POST">
          @csrf
        <div class="content">
          <p>Apakah anda sudah memilih sesuai dengan keinginan anda?</p>
          <div class="field">
              <input type="hidden" name="id" value="{{ $user->id }}">
              <input type="hidden" name="nama_user" value="{{ $user->nama_user }}">
              <input type="hidden" name="email" value="{{ $user->email }}">
              <input type="hidden" name="username" value="{{ $user->username }}">
              <input type="hidden" name="role" value="{{ $user->role }}">
              <input type="hidden" name="kandidat_id" id="kandidatId" value="">
            <button type="button" class="close">Kembali</button>
            <button  type="submit" class="btn-all" > Ya, Saya Yakin</button>
          </div>
        </div>
      </form>
      </div>

      <section>
        <div id="cara-voting">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe
              src="https://www.youtube.com/embed/qjHrmW6fnQM"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </section>

      <footer>
        <div class="footer-nav">
          <img src="/images/logo-web.svg" height="60" alt="logo-web" />
          <div class="foot-menu">
            <a href="#" class="nav-item nav-link mx-2">Beranda</a>
            <a href="#" class="nav-item nav-link mx-2">Calon Kandidat</a>
            <a href="#" class="nav-item nav-link mx-2">Cara Voting</a>
            <a href="#" class="nav-item nav-link mx-2">Hasil Voting</a>
          </div>
        </div>
        <hr />
        <div class="footer-copyright">
           &copy; 2023 HMIF ITERA. All rights reserved.
        </div>
      </footer>
    </div>
  </body>

  {{-- <script src="js/konfirmasi-vote.js"></script> --}}
  <script src="js/confirm.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></script>
</html>
