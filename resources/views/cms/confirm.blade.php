@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="/css/confirm.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

<section id="content-wrapper">
    <div class="row">
        <div class="column">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Konfirmasi</h3>
                </div>
                    <div class="container">
                        <div class="card-confirm">
                            <h2>Detail</h2>
                            <p>Pemilih :{{ $VoteData->id }}</p>
                            <p>Nama: {{ $VoteData->nama_user }}</p>
                            <p>Email: {{ $VoteData->email }}</p>
                            <p>Username: {{ $VoteData->username }}</p>
                            <p>Role: {{ $VoteData->role }}</p>
                                <div class="btn">

                                    <form action="{{ Route('move',$VoteData->id)}}" method="POST">
                                        @csrf
                                        <a id="btn-confirm"><button id="btn-confirm">Konfirmasi</button> </a>
                                    </form>

                                    <form action="{{Route('reject', $VoteData->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a id="btn-reject"><button  id="btn-reject">Tolak </button></a>
                                    </form>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<script src="js/cms.js"></script>
@endsection


