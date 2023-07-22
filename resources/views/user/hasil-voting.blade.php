<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hasil Voting</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/logout.css" />

    <link rel="stylesheet" href="/css/hasil-voting.css" />
  </head>
  <body>
    <div class="container">

      @include('partials.client-navbar')

      <section>
        <div class="container-hasil">
          <div class="logo-voting">
            <img src="/images/vote-icon.svg" alt="logo-voting" />
            <div class="gambar"></div>
            <div class="title">
              <h1>Terimah kasih telah vote 🙏</h1>
            </div>
          </div>

          <div class="image-voting-mobile">
            <img
              src="/images/bg-balon-mobile.svg"
              alt="image-voting-mobile"
            />
          </div>

          <div class="keterangan">
            <div class="keterangan-hasil">
              <h1>Hasil voting bisa dilihat di laman Instagram Pemira KM</h1>
              <div class="ig">
                <img src="/images/linked-icon.svg" />
                <a
                  href="https://www.instagram.com/pemiraitera2022/"
                  target="_blank"
                  >Instagram Pemira KM</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      @include('partials.client-footer')

    </div>
  </body>

  <script src="../index.js"></script>
</html>
