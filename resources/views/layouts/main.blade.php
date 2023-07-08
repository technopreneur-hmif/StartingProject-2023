<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMS Starting Project</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="../../style/confirm.css" /> --}}
    
</head>

@include('partials.sidebar')

@include('partials.navbar')

    <div class="container">
        @yield('container')
    </div>

@include('partials.footer')
