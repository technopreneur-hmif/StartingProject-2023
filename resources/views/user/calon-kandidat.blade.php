<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calon Kandidat</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/logout.css" />

    <link rel="stylesheet" href="/css/calon-kandidat.css" />
  </head>
  <body>
    <div class="container">
      @include('partials.client-navbar')

      <section>
        <div class="container">
          <div class="title">
            <h1>Calon Kandidat</h1>
          </div>
          <div class="kandidat-desktop">
            @foreach ($candidates as $candidate)
              <div class="kandidat-card">
                @if ($candidate->link_foto_kandidat)
                  <div class="foto-kandidat" style="background-image: url('{{ asset('storage/' . $candidate->link_foto_kandidat) }}');">
                @else
                  <div class="foto-kandidat" style="background-image: url('/images/foto-kandidat.svg');">
                @endif
                  <div class="nama-kandidat">
                    <h2>{{ $candidate->nama_kandidat }}</h2>
                    <p>{{ $candidate->prodi_Kandidat }}</p>
                  </div>
                </div>
                <div class="deskripsi-kandidat">
                  <h2>Tentang {{ $candidate->nama_kandidat }}</h2>
                  <p>
                    {{ $candidate->tentang_kandidat }}
                  </p>
                  <a href="/detail-kandidat/{{ $candidate->nama_kandidat }}" id="btn-lihat-detail">Lihat Detail</a>
                </div>
              </div>
            @endforeach
          </div>

          <div class="kandidat-mobile">
            @foreach ($candidates as $candidate)
              <div class="kandidat-card-mobile">
                <div class="foto-kandidat-mobile">
                  <button type="button" id="btn-lihat-detail">
                    Lihat Detail
                  </button>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>

      @include('partials.client-footer')
    </div>
  </body>
</html>
