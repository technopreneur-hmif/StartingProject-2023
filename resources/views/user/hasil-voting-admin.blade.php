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

    <link rel="stylesheet" href="/css/hasil-voting-admin.css" />
  </head>
  <body>
    <div class="container">

      @include('partials.client-navbar')

      <section>
        <div class="container-hasil">
          <div class="title">
            <h1>Hasil Suara</h1>
          </div>

          <div class="candidat-list">
            <div class="candidat">
              @foreach ($candidateResults as $candidate => $result)
                <div class="candidat-card">
                  <div class="candidat-bg">
                    <div class="candidat-text">
                      <h2>{{ $candidate }}</h2>
                      <h3>Total Suara {{ $result }}%</h3>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="space"></div>
      </section>

      @include('partials.client-footer')
    </div>
  </body>

  <script src="../index.js"></script>
</html>
