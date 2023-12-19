<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/logout.css" />

    <link rel="stylesheet" href="/css/login.css" />
  </head>
  <body>
    <div class="login">
      <div class="logo-website">
        <img src="/images/logo-web.svg" alt="Logo Website" />
      </div>
      <div class="container">
        <div class="login-title">
          <h2>Selamat Datang di Pemira KM ITERA</h2>
          <p>Mari Tentukan Pilihanmu!</p>
          @if (session()->has('loginError'))
            <p>{{ session('loginError') }}</p>
          @endif
        </div>

        <form class="login-form" action="/login" method="POST">
          @csrf
          <div>
            <input
              id="email"
              type="email"
              placeholder="Email Itera"
              name="email"
              required
            />
          </div>

          <div>
            <input
              id="password"
              type="password"
              placeholder="Password"
              name="password"
              required
            />
          </div>

          <button class="btn btn--form" type="submit" value="Log in">
            Masuk
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
