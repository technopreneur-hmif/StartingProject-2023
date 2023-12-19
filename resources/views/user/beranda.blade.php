<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/logout.css" />
    <link rel="stylesheet" href="/css/beranda.css" />
</head>
  <body>
    <div class="container">

      @include('partials.client-navbar')

      <header>
        <div class="bg-header">
          <div class="card-header">
            <h1>Pemira KM Itera 2023</h1>
            <p>Pemilihan Raya Keluarga Mahasiswa Institut Teknologi Sumatera</p>
            @can('pemilih')
              <a href="/page-vote" id="btn-vote">Vote</a>
            @else
              <a href="#" id="btn-vote">Vote</a>
            @endcan
          </div>
        </div>
      </header>

      <section>
        <div id="tentang-pemira">
          <h2>Pemira</h2>
          <div id="content-tentang-pemira">
            <p>
              PEMIRA KM ITERA 2022 merupakan kegiatan pemilihan presiden KM
              ITERA yang akan memimpin kabinet KM ITERA diperiode selanjutnya
            </p>
            <p>
              "Salah satu hukuman karena menolak berpartisipasi dalam politik
              adalah bahwa Anda akhirnya diperintah oleh bawahan Anda. "Plato”
            </p>
            <p>
              Jangan biarkan suara Anda terdiam. Berpartisipasilah dalam
              pemilihan raya dan jadilah bagian dari proses demokrasi yang
              menghargai pendapat dan aspirasi setiap individu.
            </p>
          </div>
        </div>
      </section>

      <section>
        <div id="cara-voting">
          <h2>Tutorial Pemilihan</h2>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe
              class="embed-responsive-item"
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
</html>
