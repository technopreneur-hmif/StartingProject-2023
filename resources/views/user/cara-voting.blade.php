<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cara Voting</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/logout.css" />

    <link rel="stylesheet" href="/css/cara-voting.css" />
  </head>
  <body>
    <div class="container">
      @include('partials.client-navbar')

      <section>
        <div class="container-tutorial">
          <div class="title">
            <h1>Tutorial Voting</h1>
          </div>
          <div id="cara-voting">
            <iframe
              width="560"
              height="315"
              src="https://www.youtube.com/embed/ZF1ucSiAhW8"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            ></iframe>
          </div>
          <div class="alur-voting">
            <button class="accordion">Login</button>
            <div class="panel">
              <p>Lorem ipsum...</p>
            </div>

            <button class="accordion">Voting</button>
            <div class="panel">
              <p>Lorem ipsum...</p>
            </div>

            <button class="accordion">Pengumuman</button>
            <div class="panel">
              <p>Lorem ipsum...</p>
            </div>

            <button class="accordion">Logout</button>
            <div class="panel">
              <p>Lorem ipsum...</p>
            </div>
          </div>
        </div>
      </section>

      @include('partials.client-footer')
    </div>
  </body>

  <script src="../js/accordion.js"></script>
</html>
