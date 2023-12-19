<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Kandidat</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/logout.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="/css/detail-kandidat.css" />
  </head>
  <body>
    <div class="container-fluid p-0 overflow-x-hidden">
      @include('partials.client-navbar')

      <section>
        <div class="container">
          <div class="title">
            <h1>Detail Kandidat</h1>
          </div>
          <div class="kandidat-desktop">
            <div class="kandidat-card">
              <img src="{{ asset('storage/' . $candidate->link_foto_kandidat) }}" alt="" />
              <div class="deskripsi-kandidat">
                <h2>Tentang {{ $candidate->nama_kandidat }}</h2>
                <p>
                  {{ $candidate->tentang_kandidat }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="visi-misi">
          <div class="visi-misi-kandidat">
            <h2 class="title-visi-misi">Visi</h2>
            <ul class="isi-visi-misi">
              <p>{{ $candidate->visi_kandidat }}</p>
            </ul>
          </div>
          <div class="visi-misi-kandidat">
            <h2 class="title-visi-misi">Visi</h2>
            <ul class="isi-visi-misi">
              <p>{{ $candidate->misi_kandidat }}</p>
            </ul>
          </div>
        </div>
      </section>

      <section id="vote">
        @can('pemilih')
          <a href="/page-vote" id="btn-vote">Vote</a>
        @else
          <a href="#" id="btn-vote">Vote</a>
        @endcan
      </section>

      @include('partials.client-footer')
    </div>
  </body>
</html>
