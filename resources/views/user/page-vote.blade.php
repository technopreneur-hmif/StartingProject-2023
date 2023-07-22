<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Voting</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/logout.css" />

    <link rel="stylesheet" href="/css/page-vote.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      @include('partials.client-navbar')

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
              @foreach($candidates as $candidate)
              <div class="kandidat-card">
                <img class="foto-kandidat" src="{{ asset('storage/' . $candidate->link_foto_kandidat) }}" alt="foto-kandidat">
                <button style="position: absolute; bottom:0; margin-bottom: 140px" id="btn-vote" 
                  class="vote-button" data-popup-target="{{ $candidate->id }}">Vote</button>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
      


      <div class="popup">
        <form action="/page-vote/{{ auth()->user()->username }}" method="POST">
          @csrf
        <div class="content">
          <p>Apakah anda sudah memilih sesuai dengan keinginan anda?</p>
          <div class="field">
              <input type="hidden" name="id" value="{{ auth()->user()->id }}">
              <input type="hidden" name="nama_user" value="{{ auth()->user()->nama_user }}">
              <input type="hidden" name="email" value="{{ auth()->user()->email }}">
              <input type="hidden" name="username" value="{{ auth()->user()->username }}">
              <input type="hidden" name="role" value="{{ auth()->user()->role }}">
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

      @include('partials.client-footer')
    </div>
  </body>

  {{-- <script src="js/konfirmasi-vote.js"></script> --}}
  <script src="js/confirm.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"></script>
</html>
