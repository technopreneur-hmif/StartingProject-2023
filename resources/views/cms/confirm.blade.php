@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="./css/confirm.css">
<section id="content-wrapper">
    <div class="row">
        <div class="column">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Konfirmasi Pemilih</h3>
                </div>
                <!-- Check settings for dependencies! -->
                <div class="containers">
                    <div class="card-confirm">
                        @foreach ($users as $user)
                        {{-- <p>{{ $loop->iteration }}</p> --}}
                        <p>{{ $user->nama_user }}</p>
                        <p>{{ $user->email }}</p>
                        <p>{{ $user->username }}</p>
                        <p>{{ $user->role }}</p>
                        @endforeach
                        <div class="btn">
                            <a href="./konfirmasi-pemilih" id="btn-confirm">Konfirmasi</a>
                            <a href="" id="btn-reject">Tolak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

<script src="../../js/cms.js"></script>
