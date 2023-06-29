<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMS Starting Project</title>

    <link rel="stylesheet" href='css/cms.css' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
</head>

<body>
    <div id="wrapper">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <img src="images/logo-web.svg" alt="Logo-Web" width="28" />
                <h2>Admin</h2>
            </div>
            <ul class="sidebar-nav">
                <li {{ ($title === 'cms') ? 'class=active' : '' }}>
                    <a href="./"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M13 9V3h8v6h-8ZM3 13V3h8v10H3Zm10 8V11h8v10h-8ZM3 21v-6h8v6H3Z" />
                        </svg>Dashboard</a>
                </li>
                <li {{ ($title === 'data-kandidat') ? 'class=active' : '' }}>
                    <a href="/data-kandidat"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16 17v2H2v-2s0-4 7-4s7 4 7 4m-3.5-9.5A3.5 3.5 0 1 0 9 11a3.5 3.5 0 0 0 3.5-3.5m3.44 5.5A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4M15 4a3.39 3.39 0 0 0-1.93.59a5 5 0 0 1 0 5.82A3.39 3.39 0 0 0 15 11a3.5 3.5 0 0 0 0-7Z" />
                        </svg>Data Kandidat</a>
                </li>
                <li {{ ($title === 'konfirmasi-pemilih') ? 'class=active' : '' }}>
                    <a href="./konfirmasi-pemilih"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="9" />
                                <path stroke-dasharray="14" stroke-dashoffset="14" d="M8 12L11 15L16 10">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.2s" values="14;0" />
                                </path>
                            </g>
                        </svg>Konfirmasi Pemilih</a>
                </li>
                <li {{ ($title === 'data-user') ? 'class=active' : '' }}>
                    <a href="./data-user"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <g fill="currentColor">
                                <path
                                    d="M9 11.5a1 1 0 1 0 0-2a1 1 0 0 0 0 2zm2-1a1 1 0 0 1 1-1h3a1 1 0 1 1 0 2h-3a1 1 0 0 1-1-1zm1 2a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3zm0 3a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2h-3zm-2-2a1 1 0 1 1-2 0a1 1 0 0 1 2 0zm-1 4a1 1 0 1 0 0-2a1 1 0 0 0 0 2z" />
                                <path
                                    d="M9 2a1 1 0 0 0-1 1H6a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-2a1 1 0 0 0-1-1H9zm7 3h2v15H6V5h2v1a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V5zm-6 0V4h4v1h-4z" />
                            </g>
                        </svg>User</a>
                </li>
            </ul>
        </aside>
    </body>

    <div class="container">
        @yield('container')
    </div>

    @include('partials.footer')
